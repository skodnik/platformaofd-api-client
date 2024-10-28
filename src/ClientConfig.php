<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi;

class ClientConfig
{
    private static string $dateTimeQueryParamsFormat = 'Y-m-d H:i:s';
    public function __construct(
        protected string $token,
        protected string $host = 'https://ofv-api-v0-1-1.evotor.ru',
        protected string $path = '/v1/client',
        protected bool $debug = false,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public static function getDateTimeQueryParamsFormat(): string
    {
        return self::$dateTimeQueryParamsFormat;
    }

    public function debug(): bool
    {
        return $this->debug;
    }
}
