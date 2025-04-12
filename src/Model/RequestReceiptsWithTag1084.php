<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\RequestBodyInterface;
use Platformaofd\ClientApi\Model\Trait\Date\ReceiptDateYmd;
use Symfony\Component\Serializer\Annotation\SerializedName;

class RequestReceiptsWithTag1084 implements RequestBodyInterface
{
    use ReceiptDateYmd;

    /**
     * @var string[]
     */
    private array $kktRegIds;

    /**
     * @var string[] $properties1084
     */
    #[SerializedName('properties_1084')]
    private array $properties1084;

    public function getKktRegIds(): array
    {
        return $this->kktRegIds;
    }

    public function setKktRegIds(array $kktRegIds): self
    {
        $this->kktRegIds = $kktRegIds;

        return $this;
    }

    public function getProperties1084(): array
    {
        return $this->properties1084;
    }

    public function setProperties1084(array $properties1084): self
    {
        $this->properties1084 = $properties1084;

        return $this;
    }
}
