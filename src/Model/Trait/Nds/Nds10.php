<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait Nds10
{
    private int $nds10;

    public function getNds10(): int
    {
        return $this->nds10;
    }

    public function setNds10(int $nds10): self
    {
        $this->nds10 = $nds10;

        return $this;
    }
}
