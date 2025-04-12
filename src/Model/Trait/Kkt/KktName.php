<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Kkt;

trait KktName
{
    private string $kktName;

    public function getKktName(): string
    {
        return $this->kktName;
    }

    public function setKktName(string $kktName): self
    {
        $this->kktName = $kktName;

        return $this;
    }
}
