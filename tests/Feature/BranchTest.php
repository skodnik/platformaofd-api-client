<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Branch;
use Platformaofd\ClientApi\Model\Kkt;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class BranchTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/Branch.json');

        $branch = $this->serializer->deserialize(
            data: $json,
            type: Branch::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: Branch::class,
            actual: $branch,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $branch,
                format: JsonEncoder::FORMAT,
            ),
        );

        $kkts = $branch->getKkts();

        self::assertIsArray($kkts);

        foreach ($kkts as $kkt) {
            self::assertInstanceOf(
                expected: Kkt::class,
                actual: $kkt,
            );
        }
    }
}
