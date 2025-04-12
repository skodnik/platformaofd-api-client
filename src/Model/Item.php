<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;

class Item
{
    private string $name;

    private int $quantity;

    private string $barcode;

    private int $price;

    private int $ndsNo;

    private int $nds10;

    private int $nds18;

    private int $ndsCalculated10;

    private int $ndsCalculated18;

    #[SerializedName('nds_1199')]
    private int $nds1199;

    private int $sum;

    private int $productType;

    private int $paymentType;

    private string $propData;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

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

    public function getNds10(): int
    {
        return $this->nds10;
    }

    public function setNds10(int $nds10): self
    {
        $this->nds10 = $nds10;

        return $this;
    }

    public function getNds18(): int
    {
        return $this->nds18;
    }

    public function setNds18(int $nds18): self
    {
        $this->nds18 = $nds18;

        return $this;
    }

    public function getNdsCalculated10(): int
    {
        return $this->ndsCalculated10;
    }

    public function setNdsCalculated10(int $ndsCalculated10): self
    {
        $this->ndsCalculated10 = $ndsCalculated10;

        return $this;
    }

    public function getNdsCalculated18(): int
    {
        return $this->ndsCalculated18;
    }

    public function setNdsCalculated18(int $ndsCalculated18): self
    {
        $this->ndsCalculated18 = $ndsCalculated18;

        return $this;
    }

    public function getNds1199(): int
    {
        return $this->nds1199;
    }

    public function setNds1199(int $nds1199): self
    {
        $this->nds1199 = $nds1199;

        return $this;
    }

    public function getSum(): int
    {
        return $this->sum;
    }

    public function setSum(int $sum): self
    {
        $this->sum = $sum;

        return $this;
    }

    public function getProductType(): int
    {
        return $this->productType;
    }

    public function setProductType(int $productType): self
    {
        $this->productType = $productType;

        return $this;
    }

    public function getPaymentType(): int
    {
        return $this->paymentType;
    }

    public function setPaymentType(int $paymentType): self
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getPropData(): string
    {
        return $this->propData;
    }

    public function setPropData(string $propData): self
    {
        $this->propData = $propData;

        return $this;
    }
}
