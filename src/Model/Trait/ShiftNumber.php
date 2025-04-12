<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait;

trait ShiftNumber
{
    private int $shiftNumber;

    public function getShiftNumber(): int
    {
        return $this->shiftNumber;
    }

    public function setShiftNumber(int $shiftNumber): self
    {
        $this->shiftNumber = $shiftNumber;

        return $this;
    }
}
