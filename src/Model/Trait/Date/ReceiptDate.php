<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait\Date;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

trait ReceiptDate
{
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private DateTimeImmutable $receiptDate;

    public function getReceiptDate(): DateTimeImmutable
    {
        return $this->receiptDate;
    }

    public function setReceiptDate(DateTimeImmutable $receiptDate): self
    {
        $this->receiptDate = $receiptDate;

        return $this;
    }
}
