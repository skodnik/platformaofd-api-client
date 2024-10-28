<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use DateTimeImmutable;
use Platformaofd\ClientApi\ClientConfig;
use Platformaofd\ClientApi\Interface\RequestPathVarInterface;
use Platformaofd\ClientApi\Interface\RequestQueryParamsInterface;

class RequestDocuments implements RequestPathVarInterface, RequestQueryParamsInterface
{
    private string $rnm;
    private DateTimeImmutable $dateFrom;
    private DateTimeImmutable $dateTo;
    private array $queryParams = [];

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
        return $this->queryParams;
    }

    public function getDateFrom(): DateTimeImmutable
    {
        return $this->dateFrom;
    }

    public function setDateFrom(DateTimeImmutable $dateFrom): self
    {
        $this->dateFrom = $dateFrom;
        $this->queryParams['dateFrom'] = $dateFrom->format(ClientConfig::getDateTimeQueryParamsFormat());

        return $this;
    }

    public function getDateTo(): DateTimeImmutable
    {
        return $this->dateTo;
    }

    public function setDateTo(DateTimeImmutable $dateTo): self
    {
        $this->dateTo = $dateTo;
        $this->queryParams['dateTo'] = $dateTo->format(ClientConfig::getDateTimeQueryParamsFormat());

        return $this;
    }
}
