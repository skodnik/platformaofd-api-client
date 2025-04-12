<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait;

trait Modifiers
{
    /**
     * @deprecated
     */
    private array $modifiers;

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function setModifiers(array $modifiers): self
    {
        $this->modifiers = $modifiers;

        return $this;
    }
}
