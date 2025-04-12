<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Kkt;

trait KktFn
{
    private string $kktFN;

    public function getKktFN(): string
    {
        return $this->kktFN;
    }

    public function setKktFN(string $kktFN): self
    {
        $this->kktFN = $kktFN;

        return $this;
    }
}
