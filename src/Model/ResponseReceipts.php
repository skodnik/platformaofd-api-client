<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\ResponseInterface;

class ResponseReceipts implements ResponseInterface
{
    /**
     * @var Receipt[] $receipts
     */
    private array $receipts;

    public function getReceipts(): array
    {
        return $this->receipts;
    }

    public function setReceipts(array $receipts): self
    {
        $this->receipts = $receipts;

        return $this;
    }
}
