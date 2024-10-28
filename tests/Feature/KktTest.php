<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Kkt;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class KktTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/Kkt.json');

        $responseDocuments = $this->serializer->deserialize(
            data: $json,
            type: Kkt::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: Kkt::class,
            actual: $responseDocuments,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $responseDocuments,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
