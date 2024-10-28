<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\RequestReceiptsWithTag1084;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class RequestReceiptsWithTag1084Test extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/RequestReceiptsWithTag1084.json');

        $requestReceiptsWithTag1084 = $this->serializer->deserialize(
            data: $json,
            type: RequestReceiptsWithTag1084::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: RequestReceiptsWithTag1084::class,
            actual: $requestReceiptsWithTag1084,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $requestReceiptsWithTag1084,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
