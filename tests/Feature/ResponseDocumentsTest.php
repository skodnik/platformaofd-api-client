<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\ResponseDocuments;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ResponseDocumentsTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/ResponseDocuments.json');

        $responseDocuments = $this->serializer->deserialize(
            data: $json,
            type: ResponseDocuments::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: ResponseDocuments::class,
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
