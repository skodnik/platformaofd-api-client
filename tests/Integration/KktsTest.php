<?php

declare(strict_types=1);

namespace Integration;

use Platformaofd\ClientApi\Model\ApiEndpoint;
use Platformaofd\ClientApi\Model\Branch;
use Platformaofd\ClientApi\Model\Kkt;
use Platformaofd\ClientApi\Model\RequestKktList;
use Platformaofd\ClientApi\Model\ResponseKktList;
use Platformaofd\ClientApi\Tests\TestCaseBase;

class KktsTest extends TestCaseBase
{
    public function test_GetKkts(): void
    {
        try {
            /** @var ResponseKktList $responseKktList */
            $responseKktList = $this->apiClient->sendRequest(
                apiEndpoint: ApiEndpoint::KKTS,
                requestObject: (new RequestKktList)
            );
        } catch (\Throwable $exception) {
            self::fail();
        }

        self::assertInstanceOf(
            expected: ResponseKktList::class,
            actual: $responseKktList,
        );

        $orgBranches = $responseKktList->getKktList()->getOrgBranches();

        foreach ($orgBranches as $orgBranch) {
            self::assertInstanceOf(expected: Branch::class, actual: $orgBranch);

            $kkts = $orgBranch->getKkts();
            foreach ($kkts as $kkt) {
                self::assertInstanceOf(expected: Kkt::class, actual: $kkt);
            }

            $branches = $orgBranch->getBranches();
            foreach ($branches as $branch) {
                self::assertInstanceOf(expected: Branch::class, actual: $branch);
            }
        }
    }
}
