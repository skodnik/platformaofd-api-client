<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Model\Trait\Kkt\KktName;
use Platformaofd\ClientApi\Model\Trait\ShiftNumber;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class ZReport
{
    use KktName, ShiftNumber;

    private int $expenseCount;

    private int $refundExpenseSumm;

    private int $expensePrepaidSumm;

    private string $kktFN;

    private int $refundIncomeSumm;

    private int $incomeProvisionSumm;

    private int $refundExpenseCount;

    private int $refundExpensePrepaidSumm;

    private int $refundIncomeCashSumm;

    private int $expenseElectroSumm;

    private string $documentLink;

    private int $incomePrepaidSumm;

    private int $refundExpenseProvisionSumm;

    private int $incomeCreditSumm;

    private int $expenseProvisionSumm;

    private int $incomeCount;

    private int $refundIncomeProvisionSumm;

    private int $refundIncomeCount;

    private int $branchId;

    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d H:i:s.v'])]
    private \DateTimeImmutable $shiftOpenDate;

    private int $refundIncomeElectroSumm;

    private int $refundExpenseCreditSumm;

    private int $incomeElectoSumm;

    private int $refundIncomePrepaidSumm;

    private int $expenseSumm;

    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d H:i:s.v'])]
    private \DateTimeImmutable $shiftCloseDate;

    private int $incomeSumm;

    private int $incomeCashSumm;

    private int $expenseCashSumm;

    private int $expenseCreditSumm;

    private string $kktNumber;

    private string $kktRegNumber;

    private int $refundIncomeCreditSumm;

    private int $refundExpenseCashSumm;

    private int $refundExpenseElectroSumm;

    public function getExpenseCount(): int
    {
        return $this->expenseCount;
    }

    public function setExpenseCount(int $expenseCount): self
    {
        $this->expenseCount = $expenseCount;

        return $this;
    }

    public function getRefundExpenseSumm(): int
    {
        return $this->refundExpenseSumm;
    }

    public function setRefundExpenseSumm(int $refundExpenseSumm): self
    {
        $this->refundExpenseSumm = $refundExpenseSumm;

        return $this;
    }

    public function getExpensePrepaidSumm(): int
    {
        return $this->expensePrepaidSumm;
    }

    public function setExpensePrepaidSumm(int $expensePrepaidSumm): self
    {
        $this->expensePrepaidSumm = $expensePrepaidSumm;

        return $this;
    }

    public function getKktFN(): string
    {
        return $this->kktFN;
    }

    public function setKktFN(string $kktFN): self
    {
        $this->kktFN = $kktFN;

        return $this;
    }

    public function getRefundIncomeSumm(): int
    {
        return $this->refundIncomeSumm;
    }

    public function setRefundIncomeSumm(int $refundIncomeSumm): self
    {
        $this->refundIncomeSumm = $refundIncomeSumm;

        return $this;
    }

    public function getIncomeProvisionSumm(): int
    {
        return $this->incomeProvisionSumm;
    }

    public function setIncomeProvisionSumm(int $incomeProvisionSumm): self
    {
        $this->incomeProvisionSumm = $incomeProvisionSumm;

        return $this;
    }

    public function getRefundExpenseCount(): int
    {
        return $this->refundExpenseCount;
    }

    public function setRefundExpenseCount(int $refundExpenseCount): self
    {
        $this->refundExpenseCount = $refundExpenseCount;

        return $this;
    }

    public function getRefundExpensePrepaidSumm(): int
    {
        return $this->refundExpensePrepaidSumm;
    }

    public function setRefundExpensePrepaidSumm(int $refundExpensePrepaidSumm): self
    {
        $this->refundExpensePrepaidSumm = $refundExpensePrepaidSumm;

        return $this;
    }

    public function getRefundIncomeCashSumm(): int
    {
        return $this->refundIncomeCashSumm;
    }

    public function setRefundIncomeCashSumm(int $refundIncomeCashSumm): self
    {
        $this->refundIncomeCashSumm = $refundIncomeCashSumm;

        return $this;
    }

    public function getExpenseElectroSumm(): int
    {
        return $this->expenseElectroSumm;
    }

    public function setExpenseElectroSumm(int $expenseElectroSumm): self
    {
        $this->expenseElectroSumm = $expenseElectroSumm;

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

    public function getIncomePrepaidSumm(): int
    {
        return $this->incomePrepaidSumm;
    }

    public function setIncomePrepaidSumm(int $incomePrepaidSumm): self
    {
        $this->incomePrepaidSumm = $incomePrepaidSumm;

        return $this;
    }

    public function getRefundExpenseProvisionSumm(): int
    {
        return $this->refundExpenseProvisionSumm;
    }

    public function setRefundExpenseProvisionSumm(int $refundExpenseProvisionSumm): self
    {
        $this->refundExpenseProvisionSumm = $refundExpenseProvisionSumm;

        return $this;
    }

    public function getIncomeCreditSumm(): int
    {
        return $this->incomeCreditSumm;
    }

    public function setIncomeCreditSumm(int $incomeCreditSumm): self
    {
        $this->incomeCreditSumm = $incomeCreditSumm;

        return $this;
    }

    public function getExpenseProvisionSumm(): int
    {
        return $this->expenseProvisionSumm;
    }

    public function setExpenseProvisionSumm(int $expenseProvisionSumm): self
    {
        $this->expenseProvisionSumm = $expenseProvisionSumm;

        return $this;
    }

    public function getIncomeCount(): int
    {
        return $this->incomeCount;
    }

    public function setIncomeCount(int $incomeCount): self
    {
        $this->incomeCount = $incomeCount;

        return $this;
    }

    public function getRefundIncomeProvisionSumm(): int
    {
        return $this->refundIncomeProvisionSumm;
    }

    public function setRefundIncomeProvisionSumm(int $refundIncomeProvisionSumm): self
    {
        $this->refundIncomeProvisionSumm = $refundIncomeProvisionSumm;

        return $this;
    }

    public function getRefundIncomeCount(): int
    {
        return $this->refundIncomeCount;
    }

    public function setRefundIncomeCount(int $refundIncomeCount): self
    {
        $this->refundIncomeCount = $refundIncomeCount;

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

    public function getShiftOpenDate(): \DateTimeImmutable
    {
        return $this->shiftOpenDate;
    }

    public function setShiftOpenDate(\DateTimeImmutable $shiftOpenDate): self
    {
        $this->shiftOpenDate = $shiftOpenDate;

        return $this;
    }

    public function getRefundIncomeElectroSumm(): int
    {
        return $this->refundIncomeElectroSumm;
    }

    public function setRefundIncomeElectroSumm(int $refundIncomeElectroSumm): self
    {
        $this->refundIncomeElectroSumm = $refundIncomeElectroSumm;

        return $this;
    }

    public function getRefundExpenseCreditSumm(): int
    {
        return $this->refundExpenseCreditSumm;
    }

    public function setRefundExpenseCreditSumm(int $refundExpenseCreditSumm): self
    {
        $this->refundExpenseCreditSumm = $refundExpenseCreditSumm;

        return $this;
    }

    public function getIncomeElectoSumm(): int
    {
        return $this->incomeElectoSumm;
    }

    public function setIncomeElectoSumm(int $incomeElectoSumm): self
    {
        $this->incomeElectoSumm = $incomeElectoSumm;

        return $this;
    }

    public function getRefundIncomePrepaidSumm(): int
    {
        return $this->refundIncomePrepaidSumm;
    }

    public function setRefundIncomePrepaidSumm(int $refundIncomePrepaidSumm): self
    {
        $this->refundIncomePrepaidSumm = $refundIncomePrepaidSumm;

        return $this;
    }

    public function getExpenseSumm(): int
    {
        return $this->expenseSumm;
    }

    public function setExpenseSumm(int $expenseSumm): self
    {
        $this->expenseSumm = $expenseSumm;

        return $this;
    }

    public function getShiftCloseDate(): \DateTimeImmutable
    {
        return $this->shiftCloseDate;
    }

    public function setShiftCloseDate(\DateTimeImmutable $shiftCloseDate): self
    {
        $this->shiftCloseDate = $shiftCloseDate;

        return $this;
    }

    public function getIncomeSumm(): int
    {
        return $this->incomeSumm;
    }

    public function setIncomeSumm(int $incomeSumm): self
    {
        $this->incomeSumm = $incomeSumm;

        return $this;
    }

    public function getIncomeCashSumm(): int
    {
        return $this->incomeCashSumm;
    }

    public function setIncomeCashSumm(int $incomeCashSumm): self
    {
        $this->incomeCashSumm = $incomeCashSumm;

        return $this;
    }

    public function getExpenseCashSumm(): int
    {
        return $this->expenseCashSumm;
    }

    public function setExpenseCashSumm(int $expenseCashSumm): self
    {
        $this->expenseCashSumm = $expenseCashSumm;

        return $this;
    }

    public function getExpenseCreditSumm(): int
    {
        return $this->expenseCreditSumm;
    }

    public function setExpenseCreditSumm(int $expenseCreditSumm): self
    {
        $this->expenseCreditSumm = $expenseCreditSumm;

        return $this;
    }

    public function getKktNumber(): string
    {
        return $this->kktNumber;
    }

    public function setKktNumber(string $kktNumber): self
    {
        $this->kktNumber = $kktNumber;

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

    public function getRefundIncomeCreditSumm(): int
    {
        return $this->refundIncomeCreditSumm;
    }

    public function setRefundIncomeCreditSumm(int $refundIncomeCreditSumm): self
    {
        $this->refundIncomeCreditSumm = $refundIncomeCreditSumm;

        return $this;
    }

    public function getRefundExpenseCashSumm(): int
    {
        return $this->refundExpenseCashSumm;
    }

    public function setRefundExpenseCashSumm(int $refundExpenseCashSumm): self
    {
        $this->refundExpenseCashSumm = $refundExpenseCashSumm;

        return $this;
    }

    public function getRefundExpenseElectroSumm(): int
    {
        return $this->refundExpenseElectroSumm;
    }

    public function setRefundExpenseElectroSumm(int $refundExpenseElectroSumm): self
    {
        $this->refundExpenseElectroSumm = $refundExpenseElectroSumm;

        return $this;
    }
}
