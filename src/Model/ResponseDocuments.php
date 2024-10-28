<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

use Platformaofd\ClientApi\Interface\ResponseInterface;

class ResponseDocuments implements ResponseInterface
{
    /**
     * @var Document[] $documents
     */
    private array $documents;

    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function setDocuments(array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }
}
