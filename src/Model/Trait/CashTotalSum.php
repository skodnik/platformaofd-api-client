<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait;

trait CashTotalSum
{
    private int $cashTotalSum;

    public function getCashTotalSum(): int
    {
        return $this->cashTotalSum;
    }

    public function setCashTotalSum(int $cashTotalSum): self
    {
        $this->cashTotalSum = $cashTotalSum;

        return $this;
    }
}
