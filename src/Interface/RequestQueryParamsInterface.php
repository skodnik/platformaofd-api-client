<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Interface;

interface RequestQueryParamsInterface extends RequestInterface
{
    public function getQueryParams(): array;
}
