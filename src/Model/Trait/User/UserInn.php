<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\User;

trait UserInn
{
    private string $userInn;

    public function getUserInn(): string
    {
        return $this->userInn;
    }

    public function setUserInn(string $userInn): self
    {
        $this->userInn = $userInn;

        return $this;
    }
}
