<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\ClientConfig;
use Platformaofd\ClientApi\Interface\RequestPathVarInterface;
use Platformaofd\ClientApi\Interface\RequestQueryParamsInterface;

class RequestZReports implements RequestPathVarInterface, RequestQueryParamsInterface
{
    private string $rnm;
    private \DateTimeImmutable $dateFrom;
    private \DateTimeImmutable $dateTo;

    public function getRnm(): string
    {
        return $this->rnm;
    }

    public function setRnm(string $rnm): RequestPathVarInterface
    {
        $this->rnm = $rnm;

        return $this;
    }

    public function getQueryParams(): array
    {
        return [
            'dateFrom' => $this->dateFrom->format(ClientConfig::getDateTimeQueryParamsFormat()),
            'dateTo' => $this->dateTo->format(ClientConfig::getDateTimeQueryParamsFormat()),
        ];
    }

    public function getDateFrom(): \DateTimeImmutable
    {
        return $this->dateFrom;
    }

    public function setDateFrom(\DateTimeImmutable $dateFrom): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    public function getDateTo(): \DateTimeImmutable
    {
        return $this->dateTo;
    }

    public function setDateTo(\DateTimeImmutable $dateTo): self
    {
        $this->dateTo = $dateTo;

        return $this;
    }
}
