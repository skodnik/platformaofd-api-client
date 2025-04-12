<?php

declare(strict_types=1);

namespace Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Platformaofd\ClientApi\Model\Document;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class DocumentTest extends TestCaseBase
{
    public static function documentNamesDataProvider(): array
    {
        return [
            ['Document_01.json'],
            ['Document_02.json'],
            ['Document_03.json'],
        ];
    }

    #[DataProvider('documentNamesDataProvider')]
    public function test_deserializeSerialize(string $documentName): void
    {
        $json = file_get_contents($this->samplesDirPath . '/' . $documentName);

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
