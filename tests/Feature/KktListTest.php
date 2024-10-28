<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Model\KktList;
use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class KktListTest extends TestCaseBase
{
    public function test_deserializeSerialize(): void
    {
        $json = file_get_contents($this->samplesDirPath . '/KktList.json');

        $kktList = $this->serializer->deserialize(
            data: $json,
            type: KktList::class,
            format: JsonEncoder::FORMAT,
        );

        self::assertInstanceOf(
            expected: KktList::class,
            actual: $kktList,
        );
        self::assertJsonStringEqualsJsonString(
            expectedJson: $json,
            actualJson: $this->serializer->serialize(
                data: $kktList,
                format: JsonEncoder::FORMAT,
            )
        );
    }
}
