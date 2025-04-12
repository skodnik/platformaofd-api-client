<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Interface;

interface RequestPathVarInterface extends RequestInterface
{
    public function getRnm(): string;

    public function setRnm(string $rnm): RequestPathVarInterface;
}
