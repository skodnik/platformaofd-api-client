<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\ResponseInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

class ResponseZReports implements ResponseInterface
{
    private string $orgInn;

    /**
     * @var ZReport[] $zReports
     */
    #[SerializedName('z-reports')]
    private array $zReports;

    public function getOrgInn(): string
    {
        return $this->orgInn;
    }

    public function setOrgInn(string $orgInn): self
    {
        $this->orgInn = $orgInn;

        return $this;
    }

    public function getZReports(): array
    {
        return $this->zReports;
    }

    public function setZReports(array $zReports): self
    {
        $this->zReports = $zReports;

        return $this;
    }
}
