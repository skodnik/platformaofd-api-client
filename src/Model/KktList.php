<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class KktList
{
    private string $orgInn;
    private string $orgKpp;
    private string $orgName;

    /**
     * @var Branch[] $orgBranches
     */
    private array $orgBranches;

    public function getOrgInn(): string
    {
        return $this->orgInn;
    }

    public function setOrgInn(string $orgInn): self
    {
        $this->orgInn = $orgInn;

        return $this;
    }

    public function getOrgKpp(): string
    {
        return $this->orgKpp;
    }

    public function setOrgKpp(string $orgKpp): self
    {
        $this->orgKpp = $orgKpp;

        return $this;
    }

    public function getOrgName(): string
    {
        return $this->orgName;
    }

    public function setOrgName(string $orgName): self
    {
        $this->orgName = $orgName;

        return $this;
    }

    public function getOrgBranches(): array
    {
        return $this->orgBranches;
    }

    public function setOrgBranches(array $orgBranches): self
    {
        $this->orgBranches = $orgBranches;

        return $this;
    }
}
