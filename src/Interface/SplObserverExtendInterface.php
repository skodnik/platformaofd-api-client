<?php

namespace Platformaofd\ClientApi\Interface;

use Platformaofd\ClientApi\Interface\RequestInterface as RequestInterfaceAlias;
use Platformaofd\ClientApi\Model\ApiEndpoint;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SplObserver;
use SplSubject;

interface SplObserverExtendInterface extends SplObserver
{
    public function update(
        SplSubject $subject,
        int $status = 0,
        ?ApiEndpoint $apiEndpoint = null,
        ?RequestInterfaceAlias $requestObject = null,
        ?RequestInterface $request = null,
        ?array $requestOptions = null,
        null|string|ResponseInterface $response = null,
        ?int $duration = null,
    ): void;
}
