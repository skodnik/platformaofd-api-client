<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Document;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class DocumentTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/Document.json');

        $document = $this->serializer->deserialize(
            data: $json,
            type: Document::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: Document::class,
            actual: $document,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $document,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
