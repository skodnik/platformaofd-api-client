<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model\Trait;

trait DocumentLink
{
    private string $documentLink;

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
