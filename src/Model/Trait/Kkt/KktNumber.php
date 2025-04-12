<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Kkt;

trait KktNumber
{
    private string $kktNumber;

    public function getKktNumber(): string
    {
        return $this->kktNumber;
    }

    public function setKktNumber(string $kktNumber): self
    {
        $this->kktNumber = $kktNumber;

        return $this;
    }
}
