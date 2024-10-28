<?php

declare(strict_types=1);

namespace Feature;

use Platformaofd\ClientApi\Tests\TestCaseBase;
use Symfony\Component\Serializer\Serializer;

class SerializerFactoryTest extends TestCaseBase
{
    public function test_instance()
    {
        self::assertInstanceOf(
            expected: Serializer::class,
            actual: $this->serializer,
        );
    }
}
