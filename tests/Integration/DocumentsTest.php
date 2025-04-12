<?php

declare(strict_types=1);

namespace Integration;

use DateTimeImmutable;
use Exception;
use Platformaofd\ClientApi\Model\ApiEndpoint;
use Platformaofd\ClientApi\Model\RequestDocuments;
use Platformaofd\ClientApi\Model\ResponseDocuments;
use Platformaofd\ClientApi\Tests\TestCaseBase;

class DocumentsTest extends TestCaseBase
{
    /**
     * @throws Exception
     */
    public function test_GetDocuments(): void
    {
        $requestDocuments = (new RequestDocuments)
            ->setRnm(getenv('RNM'))
            ->setDateFrom(new DateTimeImmutable(getenv('DATE_FROM')))
            ->setDateTo(new DateTimeImmutable(getenv('DATE_TO')));

        try {
            /** @var ResponseDocuments $responseDocuments */
            $responseDocuments = $this->apiClient->sendRequest(
                apiEndpoint: ApiEndpoint::ALL_DOCUMENTS,
                requestObject: $requestDocuments,
            );
        } catch (\Throwable $exception) {
            self::fail();
        }

        self::assertInstanceOf(
            expected: ResponseDocuments::class,
            actual: $responseDocuments,
        );
    }
}
