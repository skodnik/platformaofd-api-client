<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use DateTimeImmutable;
use Platformaofd\ClientApi\ClientConfig;
use Platformaofd\ClientApi\Interface\RequestQueryParamsInterface;
use Platformaofd\ClientApi\Model\Trait\Kkt\KktRegId;

class RequestReceipts implements RequestQueryParamsInterface
{
    use KktRegId;

    private DateTimeImmutable $dateFrom;

    private DateTimeImmutable $dateTo;

    private int $dateType = 1;

    private string $kktFnSn;

    private string $properties1084;

    private string $propData1191;

    private string $propertiesData1192;

    private array $queryParams = [];

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

    public function getDateType(): int
    {
        return $this->dateType;
    }

    public function setDateType(int $dateType): self
    {
        $this->dateType = $dateType;
        $this->queryParams['dateType'] = $dateType;

        return $this;
    }

    public function setKktRegId(string $kktRegId): self
    {
        $this->kktRegId = $kktRegId;
        $this->queryParams['kktRegId'] = $kktRegId;

        return $this;
    }

    public function getKktFnSn(): string
    {
        return $this->kktFnSn;
    }

    public function setKktFnSn(string $kktFnSn): self
    {
        $this->kktFnSn = $kktFnSn;
        $this->queryParams['kktFnSn'] = $kktFnSn;

        return $this;
    }

    public function getProperties1084(): string
    {
        return $this->properties1084;
    }

    public function setProperties1084(string $properties1084): self
    {
        $this->properties1084 = $properties1084;
        $this->queryParams['properties1084'] = $properties1084;

        return $this;
    }

    public function getPropData1191(): string
    {
        return $this->propData1191;
    }

    public function setPropData1191(string $propData1191): self
    {
        $this->propData1191 = $propData1191;
        $this->queryParams['propData1191'] = $propData1191;

        return $this;
    }

    public function getPropertiesData1192(): string
    {
        return $this->propertiesData1192;
    }

    public function setPropertiesData1192(string $propertiesData1192): self
    {
        $this->propertiesData1192 = $propertiesData1192;
        $this->queryParams['propertiesData1192'] = $propertiesData1192;

        return $this;
    }
}
