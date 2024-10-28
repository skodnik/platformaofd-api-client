<?php

namespace Platformaofd\ClientApi\Tests;

use PHPUnit\Framework\TestCase;
use Platformaofd\ClientApi\ClientConfig;
use Platformaofd\ClientApi\Factory\SerializerFactory;
use Platformaofd\ClientApi\Observer\DebugObserver;
use Platformaofd\ClientApi\PlatformaOFDClientAPI;
use Symfony\Component\Serializer\Serializer;

class TestCaseBase extends TestCase
{
    protected Serializer $serializer;
    protected string $samplesDirPath = __DIR__ . '/../static/samples';
    protected PlatformaOFDClientAPI $apiClient;

    public function __construct(?string $name = null)
    {
        parent::__construct($name);

        $this->serializer = SerializerFactory::getSerializer();

        $config = new ClientConfig(
            token: getenv('TOKEN'),
            debug: (bool)getenv('DEBUG'),
        );

        $this->apiClient = new PlatformaOFDClientAPI(
            config: $config,
            serializer: $this->serializer
        );

        if ($config->debug()) {
            $this->apiClient->attach(new DebugObserver());
        }
    }
}
