<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\ResponseInterface;

class ResponseExceptionReceipts implements ResponseInterface
{
    private string $exception;
    private string $exceptionText;
    private string $description;

    public function getException(): string
    {
        return $this->exception;
    }

    public function setException(string $exception): self
    {
        $this->exception = $exception;

        return $this;
    }

    public function getExceptionText(): string
    {
        return $this->exceptionText;
    }

    public function setExceptionText(string $exceptionText): self
    {
        $this->exceptionText = $exceptionText;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
