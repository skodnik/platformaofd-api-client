<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Nds;

use Symfony\Component\Serializer\Attribute\SerializedName;

trait Nds1199
{
    #[SerializedName('nds_1199')]
    private int $nds1199;

    public function getNds1199(): int
    {
        return $this->nds1199;
    }

    public function setNds1199(int $nds1199): self
    {
        $this->nds1199 = $nds1199;

        return $this;
    }
}
