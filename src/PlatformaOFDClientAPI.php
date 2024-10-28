<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Platformaofd\ClientApi\Exception\ApiException;
use Platformaofd\ClientApi\Interface\RequestBodyInterface;
use Platformaofd\ClientApi\Interface\RequestInterface;
use Platformaofd\ClientApi\Interface\RequestPathVarInterface;
use Platformaofd\ClientApi\Interface\RequestQueryParamsInterface;
use Platformaofd\ClientApi\Interface\ResponseInterface;
use Platformaofd\ClientApi\Interface\SplObserverExtendInterface;
use Platformaofd\ClientApi\Model\ApiEndpoint;
use Psr\Http\Message\RequestInterface as RequestInterfaceAlias;
use Psr\Http\Message\ResponseInterface as ResponseInterfaceAlias;
use SplObjectStorage;
use SplObserver;
use SplSubject;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Throwable;

class PlatformaOFDClientAPI implements SplSubject
{
    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observers;

    public function __construct(
        protected ClientConfig $config,
        protected Serializer $serializer,
        protected Client $client = new Client(),
    ) {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @throws ApiException
     * @throws Exception
     */
    public function sendRequest(
        ApiEndpoint $apiEndpoint,
        RequestInterface $requestObject,
    ): ResponseInterface {
        $duration = -hrtime(true);

        $url = $this->config->getHost() . $this->config->getPath();
        if ($requestObject instanceof RequestPathVarInterface) {
            $url .= '/' . $requestObject->getRnm();
        }
        $request = new Request(
            $apiEndpoint->getMethod(),
            $url . $apiEndpoint->getResourcePath()
        );
        $requestOptions = [
            'headers' => [
                'Token' => $this->config->getToken(),
                'Accept' => 'application/json',
                'Accept-Charset' => 'utf-8',
            ],
        ];

        if ($requestObject instanceof RequestQueryParamsInterface) {
            $requestOptions['query'] = $requestObject->getQueryParams();
        }

        if ($requestObject instanceof RequestBodyInterface) {
            $requestOptions['body'] = $this->serializer->serialize(
                data: $requestObject,
                format: JsonEncoder::FORMAT,
            );
        }

        try {
            $response = $this->client->send($request, $requestOptions);

            $duration += hrtime(true);
            $duration = (int)round($duration / 1e+6);

            $this->notify(
                status: Status::SUCCESS,
                apiEndpoint: $apiEndpoint,
                requestObject: $requestObject,
                request: $request,
                requestOptions: $requestOptions,
                response: $response,
                duration: $duration,
            );

            $response->getBody()->rewind();
        } catch (GuzzleException $exception) {
            $duration += hrtime(true);
            $duration = (int)round($duration / 1e+6);

            try {
                $responseBody = $exception->getResponse()?->getBody()->getContents();
            } catch (Throwable) {
                $responseBody = '';
            }

            $this->notify(
                status: Status::EXCEPTION,
                apiEndpoint: $apiEndpoint,
                requestObject: $requestObject,
                request: $request,
                requestOptions: $requestOptions,
                response: $responseBody,
                duration: $duration,
            );

            throw new ApiException(
                '[' . $exception->getCode() . '] ' . $exception->getMessage(),
                $exception->getCode(),
                $exception,
            );
        }

        if ($response->getStatusCode() !== 200) {
            $duration += hrtime(true);
            $duration = (int)round($duration / 1e+6);

            $responseBody = $response->getBody()->getContents();

            $this->notify(
                status: Status::EXCEPTION,
                apiEndpoint: $apiEndpoint,
                requestObject: $requestObject,
                request: $request,
                requestOptions: $requestOptions,
                response: $responseBody,
                duration: $duration,
            );

            throw new ApiException(
                '[' . $response->getStatusCode() . '] ' . $responseBody,
                $response->getStatusCode(),
            );
        }

        return $this->serializer->deserialize(
            data: $response->getBody()->getContents(),
            type: $apiEndpoint->getResponseClassName(),
            format: JsonEncoder::FORMAT
        );
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(
        int $status = Status::INIT,
        null|ApiEndpoint $apiEndpoint = null,
        null|RequestInterface $requestObject = null,
        null|RequestInterfaceAlias $request = null,
        null|array $requestOptions = null,
        null|string|ResponseInterfaceAlias $response = null,
        null|int $duration = null,
    ): void {
        /** @var SplObserverExtendInterface $observer */
        foreach ($this->observers as $observer) {
            $observer->update(
                $this,
                $status,
                $apiEndpoint,
                $requestObject,
                $request,
                $requestOptions,
                $response,
                $duration
            );
        }
    }
}
