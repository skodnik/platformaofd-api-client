<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\ResponseReceipts;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ResponseReceiptsTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseReceipts.json');


        $responseReceipts = $this->serializer->deserialize(
            data: $json,
            type: ResponseReceipts::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: ResponseReceipts::class,
            actual: $responseReceipts,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $responseReceipts,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
