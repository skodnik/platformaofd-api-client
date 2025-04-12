<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\ResponseInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseReceiptsWithTag1084 implements ResponseInterface
{
    #[SerializedName('receipts_found')]
    private int $receiptsFound;

    #[SerializedName('receipts_count')]
    private int $receiptsCount;

    /**
     * @var Receipt[]
     */
    private array $receipts;

    public function getReceiptsFound(): int
    {
        return $this->receiptsFound;
    }

    public function setReceiptsFound(int $receiptsFound): self
    {
        $this->receiptsFound = $receiptsFound;

        return $this;
    }

    public function getReceiptsCount(): int
    {
        return $this->receiptsCount;
    }

    public function setReceiptsCount(int $receiptsCount): self
    {
        $this->receiptsCount = $receiptsCount;

        return $this;
    }

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
