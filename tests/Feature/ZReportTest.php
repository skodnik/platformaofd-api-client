<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\ZReport;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ZReportTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ZReport.json');

        $zReport = $this->serializer->deserialize(
            data: $json,
            type: ZReport::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: ZReport::class,
            actual: $zReport,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $zReport,
                format: JsonEncoder::FORMAT,
            ),
        );
    }
}
