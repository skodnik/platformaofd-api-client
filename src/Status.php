<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi;

class Status
{
    public const INIT = 0;

    public const SUCCESS = 1;

    public const EXCEPTION = 2;

    public const HOST_ERROR = 3;

    public const NETWORK_ERROR = 4;
}
