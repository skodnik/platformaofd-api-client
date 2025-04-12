<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

trait Nds18
{
    private int $nds18;

    public function getNds18(): int
    {
        return $this->nds18;
    }

    public function setNds18(int $nds18): self
    {
        $this->nds18 = $nds18;

        return $this;
    }
}
