<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Kkt;

trait KktRegNumber
{
    private string $kktRegNumber;

    public function getKktRegNumber(): string
    {
        return $this->kktRegNumber;
    }

    public function setKktRegNumber(string $kktRegNumber): self
    {
        $this->kktRegNumber = $kktRegNumber;

        return $this;
    }
}
