<?php


declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\ResponseZReports;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ResponseZReportsTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseZReports.json');

        $responseZReports = $this->serializer->deserialize(
            data: $json,
            type: ResponseZReports::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: ResponseZReports::class,
            actual: $responseZReports,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $responseZReports,
                format: JsonEncoder::FORMAT,
            ),
        );
    }
}
