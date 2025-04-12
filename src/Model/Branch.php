<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

class Branch
{
    private string $branchName;

    private int $branchId;

    /**
     * @var Kkt[]
     */
    private array $kkts;

    /**
     * @var Branch[]
     */
    private array $branches;

    public function getBranchName(): string
    {
        return $this->branchName;
    }

    public function setBranchName(string $branchName): self
    {
        $this->branchName = $branchName;

        return $this;
    }

    public function getBranchId(): int
    {
        return $this->branchId;
    }

    public function setBranchId(int $branchId): self
    {
        $this->branchId = $branchId;

        return $this;
    }

    public function getKkts(): array
    {
        return $this->kkts;
    }

    public function setKkts(array $kkts): self
    {
        $this->kkts = $kkts;

        return $this;
    }

    public function getBranches(): array
    {
        return $this->branches;
    }

    public function setBranches(array $branches): self
    {
        $this->branches = $branches;

        return $this;
    }
}
