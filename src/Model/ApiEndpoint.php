<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Model;

enum ApiEndpoint: string
{
    case KKTS = 'kkts';
    case ALL_DOCUMENTS = 'all-documents';
    case Z_REPORTS = 'z-reports';
    case RECEIPTS = 'receipts';
    case WITH_TAG1084 = 'receipts/with-tag1084';

    public function getResponseClassName(): string
    {
        return match ($this->value) {
            'kkts' => ResponseKktList::class,
            'all-documents' => ResponseDocuments::class,
            'z-reports' => ResponseZReports::class,
            'receipts' => ResponseReceipts::class,
            'receipts/with-tag1084' => ResponseReceiptsWithTag1084::class,
        };
    }

    public function getMethod(): string
    {
        return match ($this->value) {
            'kkts', 'all-documents', 'z-reports', 'receipts' => 'GET',
            'receipts/with-tag1084' => 'POST',
        };
    }

    public function getResourcePath(): string
    {
        return '/' . $this->value;
    }
}
