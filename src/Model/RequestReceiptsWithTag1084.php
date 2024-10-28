<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\RequestBodyInterface;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class RequestReceiptsWithTag1084 implements RequestBodyInterface
{
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
    private \DateTimeImmutable $receiptDate;

    /**
     * @var string[] $kktRegIds
     */
    private array $kktRegIds;

    /**
     * @var string[] $properties1084
     */
    #[SerializedName('properties_1084')]
    private array $properties1084;

    public function getReceiptDate(): \DateTimeImmutable
    {
        return $this->receiptDate;
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function setReceiptDate(string $receiptDate): self
    {
        $this->receiptDate = new \DateTimeImmutable($receiptDate);

        return $this;
    }

    public function getKktRegIds(): array
    {
        return $this->kktRegIds;
    }

    public function setKktRegIds(array $kktRegIds): self
    {
        $this->kktRegIds = $kktRegIds;

        return $this;
    }

    public function getProperties1084(): array
    {
        return $this->properties1084;
    }

    public function setProperties1084(array $properties1084): self
    {
        $this->properties1084 = $properties1084;

        return $this;
    }
}
