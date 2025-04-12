<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Model\Trait\Nds\Nds0;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds10;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds1199;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds18;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds5;
use Platformaofd\ClientApi\Model\Trait\Nds\Nds7;
use Platformaofd\ClientApi\Model\Trait\Nds\NdsNo;

class Item
{
    use Nds0;
    use Nds10;
    use Nds1199;
    use Nds18;
    use Nds5;
    use Nds7;
    use NdsNo;

    private string $name;

    private string $barcode;

    private int $price;

    private int $quantity;

    /**
     * @deprecated
     */
    private array $modifiers;

    private int $ndsCalculated5;

    private int $ndsCalculated7;

    private int $ndsCalculated10;

    private int $ndsCalculated18;

    private int $sum;

    private int $productType;

    private int $productCode;

    private int $paymentType;

    private string $providerName;

    private string $providerInn;

    private int $commodityCodeTag;

    private int $productCodeCheckResult;

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

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function setModifiers(array $modifiers): self
    {
        $this->modifiers = $modifiers;

        return $this;
    }

    public function getNdsCalculated5(): int
    {
        return $this->ndsCalculated5;
    }

    public function setNdsCalculated5(int $ndsCalculated5): self
    {
        $this->ndsCalculated5 = $ndsCalculated5;

        return $this;
    }

    public function getNdsCalculated7(): int
    {
        return $this->ndsCalculated7;
    }

    public function setNdsCalculated7(int $ndsCalculated7): self
    {
        $this->ndsCalculated7 = $ndsCalculated7;

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

    public function getProductCode(): int
    {
        return $this->productCode;
    }

    public function setProductCode(int $productCode): self
    {
        $this->productCode = $productCode;

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

    public function getProviderName(): string
    {
        return $this->providerName;
    }

    public function setProviderName(string $providerName): self
    {
        $this->providerName = $providerName;

        return $this;
    }

    public function getProviderInn(): string
    {
        return $this->providerInn;
    }

    public function setProviderInn(string $providerInn): self
    {
        $this->providerInn = $providerInn;

        return $this;
    }

    public function getCommodityCodeTag(): int
    {
        return $this->commodityCodeTag;
    }

    public function setCommodityCodeTag(int $commodityCodeTag): self
    {
        $this->commodityCodeTag = $commodityCodeTag;

        return $this;
    }

    public function getProductCodeCheckResult(): int
    {
        return $this->productCodeCheckResult;
    }

    public function setProductCodeCheckResult(int $productCodeCheckResult): self
    {
        $this->productCodeCheckResult = $productCodeCheckResult;

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
