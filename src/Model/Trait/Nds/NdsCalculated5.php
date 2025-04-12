<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait NdsCalculated5
{
    private int $ndsCalculated5;

    public function getNdsCalculated5(): int
    {
        return $this->ndsCalculated5;
    }

    public function setNdsCalculated5(int $ndsCalculated5): self
    {
        $this->ndsCalculated5 = $ndsCalculated5;

        return $this;
    }
}
