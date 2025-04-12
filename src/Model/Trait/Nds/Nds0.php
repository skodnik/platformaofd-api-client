<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait Nds0
{
    private int $nds0;

    public function getNds0(): int
    {
        return $this->nds0;
    }

    public function setNds0(int $nds0): self
    {
        $this->nds0 = $nds0;

        return $this;
    }
}
