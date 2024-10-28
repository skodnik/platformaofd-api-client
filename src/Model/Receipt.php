<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class Receipt
{
    private string $user;
    private string $userInn;
    private int $rqId;

    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private \DateTimeImmutable $rqDate;
    private string $kktName;
    private string $kktRegId;
    private int $shiftNumber;
    private string $fiscalDriveNumber;
    private int $fiscalDocumentNumber;
    private int $fiscalSign;

    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private \DateTimeImmutable $receiptDate;
    private int $receiptCode;
    private int $cashTotalSum;
    private int $ecashTotalSum;
    private string $operator;
    private int $totalSum;
    private int $requestNumber;

    /**
     * @var Item[] $items
     */
    private array $items;
    private int $operationType;
    private int $taxationType;
    private string $retailPlace;
    private string $retailPlaceAddress;
    private string $buyerAddress;
    private string $senderAddress;
    private int $ndsNo;
    private int $prepaidSum;
    private int $provisionSum;
    private int $creditSum;
    private ?int $dateTime;
    private ?int $nds0;
    private string $propertiesData;

    /**
     * @var Property[] $properties
     */
    private array $properties;
    private string $documentLink;


    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUserInn(): string
    {
        return $this->userInn;
    }

    public function setUserInn(string $userInn): self
    {
        $this->userInn = $userInn;

        return $this;
    }

    public function getRqId(): int
    {
        return $this->rqId;
    }

    public function setRqId(int $rqId): self
    {
        $this->rqId = $rqId;

        return $this;
    }

    public function getRqDate(): \DateTimeImmutable
    {
        return $this->rqDate;
    }

    public function setRqDate(\DateTimeImmutable $rqDate): self
    {
        $this->rqDate = $rqDate;

        return $this;
    }

    public function getKktName(): string
    {
        return $this->kktName;
    }

    public function setKktName(string $kktName): self
    {
        $this->kktName = $kktName;

        return $this;
    }

    public function getKktRegId(): string
    {
        return $this->kktRegId;
    }

    public function setKktRegId(string $kktRegId): self
    {
        $this->kktRegId = $kktRegId;

        return $this;
    }

    public function getShiftNumber(): int
    {
        return $this->shiftNumber;
    }

    public function setShiftNumber(int $shiftNumber): self
    {
        $this->shiftNumber = $shiftNumber;

        return $this;
    }

    public function getFiscalDriveNumber(): string
    {
        return $this->fiscalDriveNumber;
    }

    public function setFiscalDriveNumber(string $fiscalDriveNumber): self
    {
        $this->fiscalDriveNumber = $fiscalDriveNumber;

        return $this;
    }

    public function getFiscalDocumentNumber(): int
    {
        return $this->fiscalDocumentNumber;
    }

    public function setFiscalDocumentNumber(int $fiscalDocumentNumber): self
    {
        $this->fiscalDocumentNumber = $fiscalDocumentNumber;

        return $this;
    }

    public function getFiscalSign(): int
    {
        return $this->fiscalSign;
    }

    public function setFiscalSign(int $fiscalSign): self
    {
        $this->fiscalSign = $fiscalSign;

        return $this;
    }

    public function getReceiptDate(): \DateTimeImmutable
    {
        return $this->receiptDate;
    }

    public function setReceiptDate(\DateTimeImmutable $receiptDate): self
    {
        $this->receiptDate = $receiptDate;

        return $this;
    }

    public function getReceiptCode(): int
    {
        return $this->receiptCode;
    }

    public function setReceiptCode(int $receiptCode): self
    {
        $this->receiptCode = $receiptCode;

        return $this;
    }

    public function getCashTotalSum(): int
    {
        return $this->cashTotalSum;
    }

    public function setCashTotalSum(int $cashTotalSum): self
    {
        $this->cashTotalSum = $cashTotalSum;

        return $this;
    }

    public function getEcashTotalSum(): int
    {
        return $this->ecashTotalSum;
    }

    public function setEcashTotalSum(int $ecashTotalSum): self
    {
        $this->ecashTotalSum = $ecashTotalSum;

        return $this;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function setOperator(string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    public function getTotalSum(): int
    {
        return $this->totalSum;
    }

    public function setTotalSum(int $totalSum): self
    {
        $this->totalSum = $totalSum;

        return $this;
    }

    public function getRequestNumber(): int
    {
        return $this->requestNumber;
    }

    public function setRequestNumber(int $requestNumber): self
    {
        $this->requestNumber = $requestNumber;

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getOperationType(): int
    {
        return $this->operationType;
    }

    public function setOperationType(int $operationType): self
    {
        $this->operationType = $operationType;

        return $this;
    }

    public function getTaxationType(): int
    {
        return $this->taxationType;
    }

    public function setTaxationType(int $taxationType): self
    {
        $this->taxationType = $taxationType;

        return $this;
    }

    public function getRetailPlace(): string
    {
        return $this->retailPlace;
    }

    public function setRetailPlace(string $retailPlace): self
    {
        $this->retailPlace = $retailPlace;

        return $this;
    }

    public function getRetailPlaceAddress(): string
    {
        return $this->retailPlaceAddress;
    }

    public function setRetailPlaceAddress(string $retailPlaceAddress): self
    {
        $this->retailPlaceAddress = $retailPlaceAddress;

        return $this;
    }

    public function getBuyerAddress(): string
    {
        return $this->buyerAddress;
    }

    public function setBuyerAddress(string $buyerAddress): self
    {
        $this->buyerAddress = $buyerAddress;

        return $this;
    }

    public function getSenderAddress(): string
    {
        return $this->senderAddress;
    }

    public function setSenderAddress(string $senderAddress): self
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    public function getNdsNo(): int
    {
        return $this->ndsNo;
    }

    public function setNdsNo(int $ndsNo): self
    {
        $this->ndsNo = $ndsNo;

        return $this;
    }

    public function getPrepaidSum(): int
    {
        return $this->prepaidSum;
    }

    public function setPrepaidSum(int $prepaidSum): self
    {
        $this->prepaidSum = $prepaidSum;

        return $this;
    }

    public function getProvisionSum(): int
    {
        return $this->provisionSum;
    }

    public function setProvisionSum(int $provisionSum): self
    {
        $this->provisionSum = $provisionSum;

        return $this;
    }

    public function getCreditSum(): int
    {
        return $this->creditSum;
    }

    public function setCreditSum(int $creditSum): self
    {
        $this->creditSum = $creditSum;

        return $this;
    }

    public function getDateTime(): int
    {
        return $this->dateTime;
    }

    public function setDateTime(int $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getNds0(): int
    {
        return $this->nds0;
    }

    public function setNds0(int $nds0): self
    {
        $this->nds0 = $nds0;

        return $this;
    }

    public function getPropertiesData(): string
    {
        return $this->propertiesData;
    }

    public function setPropertiesData(string $propertiesData): self
    {
        $this->propertiesData = $propertiesData;

        return $this;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setProperties(array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    public function getDocumentLink(): string
    {
        return $this->documentLink;
    }

    public function setDocumentLink(string $documentLink): self
    {
        $this->documentLink = $documentLink;

        return $this;
    }
}
