<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Branch;
use Platformaofd\ClientApi\Model\Kkt;
use Platformaofd\ClientApi\Model\ResponseKktList;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ResponseKktListTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseKktList.json');

        $responseKktList = $this->serializer->deserialize(
            data: $json,
            type: ResponseKktList::class,
            format: JsonEncoder::FORMAT
        );

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

        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $responseKktList,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
