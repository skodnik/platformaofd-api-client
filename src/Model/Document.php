<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Model\Trait\Date\ReqDocDate;
use Platformaofd\ClientApi\Model\Trait\Date\RqDate;
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

class Document
{
    use Nds0,
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
        ReqDocDate,
        RqDate,
        RqId,
        ShiftNumber,
        UserInn;

    private ?int $dateTime;

    private int $operationTypeId;

    private string $operator;

    private int $taxationTypeId;

    private string $docTypeName;

    private int $requestNumber;

    private int $docTypeId;

    private string $docFp;

    private int $fiscalDocumentNumber;

    private string $documentLink;

    private string $taxationType;

    private string $kktRegId;

    private string $userName;

    private int $cashTotalSum;

    private int $totalSum;

    private int $fnsGate;

    private string $fnSn;

    private int $fdFormatVer;

    private string $operationType;

    public function getDateTime(): int
    {
        return $this->dateTime;
    }

    public function setDateTime(int $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getOperationTypeId(): int
    {
        return $this->operationTypeId;
    }

    public function setOperationTypeId(int $operationTypeId): self
    {
        $this->operationTypeId = $operationTypeId;

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

    public function getTaxationTypeId(): int
    {
        return $this->taxationTypeId;
    }

    public function setTaxationTypeId(int $taxationTypeId): self
    {
        $this->taxationTypeId = $taxationTypeId;

        return $this;
    }

    public function getDocTypeName(): string
    {
        return $this->docTypeName;
    }

    public function setDocTypeName(string $docTypeName): self
    {
        $this->docTypeName = $docTypeName;

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

    public function getDocTypeId(): int
    {
        return $this->docTypeId;
    }

    public function setDocTypeId(int $docTypeId): self
    {
        $this->docTypeId = $docTypeId;

        return $this;
    }

    public function getDocFp(): string
    {
        return $this->docFp;
    }

    public function setDocFp(string $docFp): self
    {
        $this->docFp = $docFp;

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

    public function getDocumentLink(): string
    {
        return $this->documentLink;
    }

    public function setDocumentLink(string $documentLink): self
    {
        $this->documentLink = $documentLink;

        return $this;
    }

    public function getTaxationType(): string
    {
        return $this->taxationType;
    }

    public function setTaxationType(string $taxationType): self
    {
        $this->taxationType = $taxationType;

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

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

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

    public function getTotalSum(): int
    {
        return $this->totalSum;
    }

    public function setTotalSum(int $totalSum): self
    {
        $this->totalSum = $totalSum;

        return $this;
    }

    public function getFnsGate(): int
    {
        return $this->fnsGate;
    }

    public function setFnsGate(int $fnsGate): self
    {
        $this->fnsGate = $fnsGate;

        return $this;
    }

    public function getFnSn(): string
    {
        return $this->fnSn;
    }

    public function setFnSn(string $fnSn): self
    {
        $this->fnSn = $fnSn;

        return $this;
    }

    public function getFdFormatVer(): int
    {
        return $this->fdFormatVer;
    }

    public function setFdFormatVer(int $fdFormatVer): self
    {
        $this->fdFormatVer = $fdFormatVer;

        return $this;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType): self
    {
        $this->operationType = $operationType;

        return $this;
    }
}
