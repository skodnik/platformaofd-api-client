<?php

declare(strict_types=1);

namespace Integration;

use DateTimeImmutable;
use Exception;
use Platformaofd\ClientApi\Model\ApiEndpoint;
use Platformaofd\ClientApi\Model\RequestReceipts;
use Platformaofd\ClientApi\Model\ResponseKktList;
use Platformaofd\ClientApi\Model\ResponseReceipts;
use Platformaofd\ClientApi\Tests\TestCaseBase;

class ReceiptsTest extends TestCaseBase
{
    /**
     * @throws Exception
     */
    public function test_GetReceipts(): void
    {
        $requestReceipts = (new RequestReceipts)
            ->setKktRegId(getenv('RNM'))
            ->setKktFnSn(getenv('KKT_FN_SN'))
            ->setDateFrom(new DateTimeImmutable(getenv('DATE_FROM')))
            ->setDateTo(new DateTimeImmutable(getenv('DATE_TO')));

        try {
            /** @var ResponseKktList $responseKktList */
            $responseReceipts = $this->apiClient->sendRequest(
                apiEndpoint: ApiEndpoint::RECEIPTS,
                requestObject: $requestReceipts,
            );
        } catch (\Throwable $exception) {
            self::fail();
        }

        self::assertInstanceOf(
            expected: ResponseReceipts::class,
            actual: $responseReceipts,
        );
    }
}
