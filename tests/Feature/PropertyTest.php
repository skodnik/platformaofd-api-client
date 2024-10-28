<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\Property;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class PropertyTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/Property.json');

        $property = $this->serializer->deserialize(
            data: $json,
            type: Property::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: Property::class,
            actual: $property,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $property,
                format: JsonEncoder::FORMAT,
            ),
        );
    }
}
