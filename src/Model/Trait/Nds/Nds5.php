<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait Nds5
{
    private int $nds5;

    public function getNds5(): int
    {
        return $this->nds5;
    }

    public function setNds5(int $nds5): self
    {
        $this->nds5 = $nds5;

        return $this;
    }
}
