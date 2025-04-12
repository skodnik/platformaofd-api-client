<?php

declare(strict_types=1);

namespace Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Platformaofd\ClientApi\Model\Item;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ItemTest extends TestCaseBase
{
    public static function itemNamesDataProvider(): array
    {
        return [
            ['Item_01.json'],
            ['Item_02.json'],
            ['Item_03.json'],
        ];
    }

    #[dataProvider('itemNamesDataProvider')]
    public function test_deserializeSerialize(string $itemName): void
    {
        $json = file_get_contents($this->samplesDirPath . '/' . $itemName);

        $item = $this->serializer->deserialize(
            data: $json,
            type: Item::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: Item::class,
            actual: $item,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $item,
                format: JsonEncoder::FORMAT,
            ),
        );
    }
}
