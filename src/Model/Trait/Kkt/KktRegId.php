<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Kkt;

trait KktRegId
{
    private string $kktRegId;

    public function getKktRegId(): string
    {
        return $this->kktRegId;
    }

    public function setKktRegId(string $kktRegId): self
    {
        $this->kktRegId = $kktRegId;

        return $this;
    }
}
