<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait;

trait RqId
{
    private int $rqId;

    public function getRqId(): int
    {
        return $this->rqId;
    }

    public function setRqId(int $rqId): self
    {
        $this->rqId = $rqId;

        return $this;
    }
}
