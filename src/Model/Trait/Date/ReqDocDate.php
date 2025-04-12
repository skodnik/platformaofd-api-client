<?php

namespace Platformaofd\ClientApi\Model\Trait\Date;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

trait ReqDocDate
{
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private DateTimeImmutable $reqDocDate;

    public function getReqDocDate(): DateTimeImmutable
    {
        return $this->reqDocDate;
    }

    public function setReqDocDate(string $reqDocDate): self
    {
        $this->reqDocDate = DateTimeImmutable::createFromFormat('Y.m.d H:i:s.v', $reqDocDate);

        return $this;
    }
}
