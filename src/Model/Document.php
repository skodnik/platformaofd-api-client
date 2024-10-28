<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use DateTimeImmutable;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class Document
{
    private ?int $dateTime;
    private int $operationTypeId;
    private int $shiftNumber;
    private string $operator;
    private int $rqId;
    private int $taxationTypeId;
    private string $docTypeName;
    private int $requestNumber;
    private int $docTypeId;
    private string $docFp;
    private int $fiscalDocumentNumber;
    private string $documentLink;
    private string $taxationType;
    private int $ndsNo;
    private string $userInn;
    private string $kktRegId;
    private string $userName;

    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private \DateTimeImmutable $rqDate;
    private int $cashTotalSum;
    private int $totalSum;
    private int $fnsGate;
    private string $fnSn;
    private int $fdFormatVer;

    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y.m.d H:i:s.v'])]
    private \DateTimeImmutable $reqDocDate;
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

    public function getShiftNumber(): int
    {
        return $this->shiftNumber;
    }

    public function setShiftNumber(int $shiftNumber): self
    {
        $this->shiftNumber = $shiftNumber;

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

    public function getRqId(): int
    {
        return $this->rqId;
    }

    public function setRqId(int $rqId): self
    {
        $this->rqId = $rqId;

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

    public function getNdsNo(): int
    {
        return $this->ndsNo;
    }

    public function setNdsNo(int $ndsNo): self
    {
        $this->ndsNo = $ndsNo;

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

    public function getRqDate(): \DateTimeImmutable
    {
        return $this->rqDate;
    }

    public function setRqDate(string $rqDate): self
    {
        $this->rqDate = DateTimeImmutable::createFromFormat('Y.m.d H:i:s.v', $rqDate);

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

    public function getReqDocDate(): \DateTimeImmutable
    {
        return $this->reqDocDate;
    }

    public function setReqDocDate(string $reqDocDate): self
    {
        $this->reqDocDate = DateTimeImmutable::createFromFormat('Y.m.d H:i:s.v', $reqDocDate);

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
