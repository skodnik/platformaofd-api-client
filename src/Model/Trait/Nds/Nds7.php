<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait Nds7
{
    private int $nds7;

    public function getNds7(): int
    {
        return $this->nds7;
    }

    public function setNds7(int $nds7): self
    {
        $this->nds7 = $nds7;

        return $this;
    }
}
