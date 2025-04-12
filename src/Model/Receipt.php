<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Model\Trait\CashTotalSum;
use Platformaofd\ClientApi\Model\Trait\Date\ReceiptDate;
use Platformaofd\ClientApi\Model\Trait\Date\RqDate;
use Platformaofd\ClientApi\Model\Trait\Modifiers;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds0;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds10;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds1199;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds18;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds5;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds7;
use Platformaofd\ClientApi\Model\Trait\Nds\NdsCalculated10;
use Platformaofd\ClientApi\Model\Trait\Nds\NdsCalculated18;
use Platformaofd\ClientApi\Model\Trait\Nds\NdsCalculated5;
use Platformaofd\ClientApi\Model\Trait\Nds\NdsCalculated7;
use Platformaofd\ClientApi\Model\Trait\Nds\NdsNo;
use Platformaofd\ClientApi\Model\Trait\RqId;
use Platformaofd\ClientApi\Model\Trait\ShiftNumber;
use Platformaofd\ClientApi\Model\Trait\User\UserInn;

class Receipt
{
    use CashTotalSum,
        Modifiers,
        Nds0,
        Nds10,
        Nds1199,
        Nds18,
        Nds5,
        Nds7,
        NdsCalculated10,
        NdsCalculated18,
        NdsCalculated5,
        NdsCalculated7,
        NdsNo,
        Operator,
        ReceiptDate,
        RqDate,
        RqId,
        ShiftNumber,
        UserInn;

    private string $user;

    private string $kktName;

    private string $kktRegId;

    private string $fiscalDriveNumber;

    private int $fiscalDocumentNumber;

    private int $fiscalSign;

    private string $fnsUrl;

    private int $receiptCode;

    private int $ecashTotalSum;

    private int $totalSum;

    private int $requestNumber;

    /**
     * @var Item[]
     */
    private array $items;

    private int $operationType;

    /**
     * @deprecated
     */
    private array $stornoItems;

    private int $taxationType;

    private string $retailPlace;

    private string $retailPlaceAddress;

    private string $buyerAddress;

    private string $senderAddress;

    private int $prepaidSum;

    private int $provisionSum;

    private int $creditSum;

    private ?int $dateTime;

    private string $propertiesData;

    /**
     * @var Property[]
     */
    private ?array $properties = null;

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

    public function getStornoItems(): array
    {
        return $this->stornoItems;
    }

    public function setStornoItems(array $stornoItems): self
    {
        $this->stornoItems = $stornoItems;

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

    public function getFnsUrl(): string
    {
        return $this->fnsUrl;
    }

    public function setFnsUrl(string $fnsUrl): self
    {
        $this->fnsUrl = $fnsUrl;

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

    public function getEcashTotalSum(): int
    {
        return $this->ecashTotalSum;
    }

    public function setEcashTotalSum(int $ecashTotalSum): self
    {
        $this->ecashTotalSum = $ecashTotalSum;

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

    public function getPropertiesData(): string
    {
        return $this->propertiesData;
    }

    public function setPropertiesData(string $propertiesData): self
    {
        $this->propertiesData = $propertiesData;

        return $this;
    }

    public function getProperties(): ?array
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
