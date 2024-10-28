<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\ResponseReceiptsWithTag1084;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ResponseReceiptsWithTag1084Test extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseReceiptsWithTag1084.json');

        $responseReceiptsWithTag1084 = $this->serializer->deserialize(
            data: $json,
            type: ResponseReceiptsWithTag1084::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: ResponseReceiptsWithTag1084::class,
            actual: $responseReceiptsWithTag1084,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $responseReceiptsWithTag1084,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
