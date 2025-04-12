<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait NdsNo
{
    private int $ndsNo;

    public function getNdsNo(): int
    {
        return $this->ndsNo;
    }

    public function setNdsNo(int $ndsNo): self
    {
        $this->ndsNo = $ndsNo;

        return $this;
    }
}
