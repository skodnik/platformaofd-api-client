<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Observer;

use Platformaofd\ClientApi\Interface\RequestInterface as RequestInterfaceAlias;
use Platformaofd\ClientApi\Interface\SplObserverExtendInterface;
use Platformaofd\ClientApi\Model\ApiEndpoint;
use Platformaofd\ClientApi\Status;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SplSubject;
use Throwable;

/**
 * Пример обсервера для клиента.
 * В теле метода update разместить необходимый к исполнению код, например, логгер.
 */
class DebugObserver implements SplObserverExtendInterface
{
    public function update(
        SplSubject $subject,
        int $status = Status::INIT,
        null|ApiEndpoint $apiEndpoint = null,
        null|RequestInterfaceAlias $requestObject = null,
        null|RequestInterface $request = null,
        null|array $requestOptions = null,
        null|string|ResponseInterface $response = null,
        null|int $duration = null,
    ): void {
        $tmpPath = './var/tmp/' . date('Y-m-d_H:i:s') . '_';
        $requestClassName = explode('\\', get_class($requestObject));
        $headers = '';
        foreach ($requestOptions['headers'] as $name => $value) {
            $headers .= $name . ': ' . $value . PHP_EOL;
        }
        $requestBody = $requestOptions['body'] ?? '';
        $requestHttp = '### ' . $apiEndpoint->getResponseClassName() . PHP_EOL .
            $request->getMethod() . ' ' .
            $request->getUri() .
            (isset($requestOptions['query']) ? '?' . http_build_query($requestOptions['query']) : '') . PHP_EOL .
            $headers . PHP_EOL .
            $requestBody;

        $responseClassName = explode('\\', $apiEndpoint->getResponseClassName());

        if ($status === Status::SUCCESS) {
            try {
                $message = $response ? $response->getBody()->getContents() : '';
            } catch (Throwable) {
                $message = '';
            }

            // Store request
            file_put_contents(
                $tmpPath . end($requestClassName) . '.http',
                $requestHttp
            );

            // Store response
            file_put_contents(
                $tmpPath . end($responseClassName) . '_' . $duration . 'ms.json',
                $message
            );
        } elseif ($status === Status::EXCEPTION) {
            try {
                $message = $response ? $response->getBody()->getContents() : '';
            } catch (Throwable) {
                $message = $response;
            }

            // Store request
            file_put_contents(
                $tmpPath . end($requestClassName) . '.http',
                $requestHttp
            );

            // Store response
            file_put_contents(
                $tmpPath . end($responseClassName) . '_' . $duration . 'ms.json',
                $message
            );
        }
    }
}
