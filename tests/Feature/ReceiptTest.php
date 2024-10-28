<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Item;
use Platformaofd\ClientApi\Model\Property;
use Platformaofd\ClientApi\Model\Receipt;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ReceiptTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/Receipt.json');

        $receipt = $this->serializer->deserialize(
            data: $json,
            type: Receipt::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(Receipt::class, $receipt);
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $receipt,
                format: JsonEncoder::FORMAT,
            ),
        );

        $items = $receipt->getItems();

        self::assertIsArray($items);

        foreach ($items as $item) {
            self::assertInstanceOf(expected: Item::class, actual: $item);
        }

        $properties = $receipt->getProperties();

        self::assertIsArray($properties);

        foreach ($properties as $property) {
            self::assertInstanceOf(expected: Property::class, actual: $property);
        }
    }
}
