<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Date;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

trait ReceiptDateYmd
{
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d'])]
    private DateTimeImmutable $receiptDate;

    public function getReceiptDate(): DateTimeImmutable
    {
        return $this->receiptDate;
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function setReceiptDate(string $receiptDate): self
    {
        $this->receiptDate = new DateTimeImmutable($receiptDate);

        return $this;
    }
}
