<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait NdsCalculated10
{
    private int $ndsCalculated10;

    public function getNdsCalculated10(): int
    {
        return $this->ndsCalculated10;
    }

    public function setNdsCalculated10(int $ndsCalculated10): self
    {
        $this->ndsCalculated10 = $ndsCalculated10;

        return $this;
    }
}
