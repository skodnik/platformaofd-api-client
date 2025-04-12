<?php

namespace Platformaofd\ClientApi\Model\Trait\Date;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

trait RqDate
{
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private DateTimeImmutable $rqDate;

    public function getRqDate(): DateTimeImmutable
    {
        return $this->rqDate;
    }

    public function setRqDate(string $rqDate): self
    {
        $this->rqDate = DateTimeImmutable::createFromFormat('Y.m.d H:i:s.v', $rqDate);

        return $this;
    }
}
