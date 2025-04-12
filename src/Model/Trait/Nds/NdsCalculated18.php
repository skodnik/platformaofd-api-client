<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait NdsCalculated18
{
    private int $ndsCalculated18;

    public function getNdsCalculated18(): int
    {
        return $this->ndsCalculated18;
    }

    public function setNdsCalculated18(int $ndsCalculated18): self
    {
        $this->ndsCalculated18 = $ndsCalculated18;

        return $this;
    }
}
