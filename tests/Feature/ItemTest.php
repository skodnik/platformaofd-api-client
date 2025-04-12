<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Item;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ItemTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/Item.json');

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
