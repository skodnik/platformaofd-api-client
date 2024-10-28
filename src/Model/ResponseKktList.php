<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\ResponseInterface;

class ResponseKktList implements ResponseInterface
{
    private KktList $kktList;

    public function getKktList(): KktList
    {
        return $this->kktList;
    }

    public function setKktList(KktList $kktList): self
    {
        $this->kktList = $kktList;

        return $this;
    }
}
