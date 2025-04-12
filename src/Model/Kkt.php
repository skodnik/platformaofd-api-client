<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Model\Trait\Kkt\KktFn;
use Platformaofd\ClientApi\Model\Trait\Kkt\KktName;
use Platformaofd\ClientApi\Model\Trait\Kkt\KktNumber;

class Kkt
{
    use KktFn, KktName, KktNumber;

    private string $kktModel;

    private int $kktCheckStatus;

    private \DateTimeImmutable $kktRegDate;

    private string $kktRegNumber;

    private \DateTimeImmutable $kktCheckFNSDate;

    private string $kktCheckState;

    private int $kktStatus;

    private \DateTimeImmutable $kktLastCheckStatusDate;

    private string $retailAddress;

    private \DateTimeImmutable $kktLastSubscriptionDateTill;

    private \DateTimeImmutable $kktCurrentSubscriptionDateTill;

    private \DateTimeImmutable $kktFnInstallDate;

    private \DateTimeImmutable $kktFnDateTill;

    private \DateTimeImmutable $kktFnDateTillForecast;

    private int $kktFnSpaceUsed;

    public function getKktModel(): string
    {
        return $this->kktModel;
    }

    public function setKktModel(string $kktModel): self
    {
        $this->kktModel = $kktModel;

        return $this;
    }

    public function getKktCheckStatus(): int
    {
        return $this->kktCheckStatus;
    }

    public function setKktCheckStatus(int $kktCheckStatus): self
    {
        $this->kktCheckStatus = $kktCheckStatus;

        return $this;
    }

    public function getKktRegDate(): \DateTimeImmutable
    {
        return $this->kktRegDate;
    }

    public function setKktRegDate(\DateTimeImmutable $kktRegDate): self
    {
        $this->kktRegDate = $kktRegDate;

        return $this;
    }

    public function getKktRegNumber(): string
    {
        return $this->kktRegNumber;
    }

    public function setKktRegNumber(string $kktRegNumber): self
    {
        $this->kktRegNumber = $kktRegNumber;

        return $this;
    }

    public function getKktCheckFNSDate(): \DateTimeImmutable
    {
        return $this->kktCheckFNSDate;
    }

    public function setKktCheckFNSDate(\DateTimeImmutable $kktCheckFNSDate): self
    {
        $this->kktCheckFNSDate = $kktCheckFNSDate;

        return $this;
    }

    public function getKktCheckState(): string
    {
        return $this->kktCheckState;
    }

    public function setKktCheckState(string $kktCheckState): self
    {
        $this->kktCheckState = $kktCheckState;

        return $this;
    }

    public function getKktStatus(): int
    {
        return $this->kktStatus;
    }

    public function setKktStatus(int $kktStatus): self
    {
        $this->kktStatus = $kktStatus;

        return $this;
    }

    public function getKktLastCheckStatusDate(): \DateTimeImmutable
    {
        return $this->kktLastCheckStatusDate;
    }

    public function setKktLastCheckStatusDate(\DateTimeImmutable $kktLastCheckStatusDate): self
    {
        $this->kktLastCheckStatusDate = $kktLastCheckStatusDate;

        return $this;
    }

    public function getRetailAddress(): string
    {
        return $this->retailAddress;
    }

    public function setRetailAddress(string $retailAddress): self
    {
        $this->retailAddress = $retailAddress;

        return $this;
    }

    public function getKktLastSubscriptionDateTill(): \DateTimeImmutable
    {
        return $this->kktLastSubscriptionDateTill;
    }

    public function setKktLastSubscriptionDateTill(\DateTimeImmutable $kktLastSubscriptionDateTill): self
    {
        $this->kktLastSubscriptionDateTill = $kktLastSubscriptionDateTill;

        return $this;
    }

    public function getKktCurrentSubscriptionDateTill(): \DateTimeImmutable
    {
        return $this->kktCurrentSubscriptionDateTill;
    }

    public function setKktCurrentSubscriptionDateTill(\DateTimeImmutable $kktCurrentSubscriptionDateTill): self
    {
        $this->kktCurrentSubscriptionDateTill = $kktCurrentSubscriptionDateTill;

        return $this;
    }

    public function getKktFnInstallDate(): \DateTimeImmutable
    {
        return $this->kktFnInstallDate;
    }

    public function setKktFnInstallDate(\DateTimeImmutable $kktFnInstallDate): self
    {
        $this->kktFnInstallDate = $kktFnInstallDate;

        return $this;
    }

    public function getKktFnDateTill(): \DateTimeImmutable
    {
        return $this->kktFnDateTill;
    }

    public function setKktFnDateTill(\DateTimeImmutable $kktFnDateTill): self
    {
        $this->kktFnDateTill = $kktFnDateTill;

        return $this;
    }

    public function getKktFnDateTillForecast(): \DateTimeImmutable
    {
        return $this->kktFnDateTillForecast;
    }

    public function setKktFnDateTillForecast(\DateTimeImmutable $kktFnDateTillForecast): self
    {
        $this->kktFnDateTillForecast = $kktFnDateTillForecast;

        return $this;
    }

    public function getKktFnSpaceUsed(): int
    {
        return $this->kktFnSpaceUsed;
    }

    public function setKktFnSpaceUsed(int $kktFnSpaceUsed): self
    {
        $this->kktFnSpaceUsed = $kktFnSpaceUsed;

        return $this;
    }
}
