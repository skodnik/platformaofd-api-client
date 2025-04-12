<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait NdsCalculated7
{
    private int $ndsCalculated7;

    public function getNdsCalculated7(): int
    {
        return $this->ndsCalculated7;
    }

    public function setNdsCalculated7(int $ndsCalculated7): self
    {
        $this->ndsCalculated7 = $ndsCalculated7;

        return $this;
    }
}
