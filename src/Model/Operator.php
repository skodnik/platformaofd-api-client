<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

trait Operator
{
    private string $operator;

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function setOperator(string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }
}
