<?php

/**
 * Red Invoice (https://redinvoice.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2025. The Red Sun
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace App\Services\EDocument\Standards\Validation\Peppol;

use Symfony\Component\Serializer\Attribute\SerializedName;
use InvoiceNinja\EInvoice\Models\Peppol\DocumentReferenceType\InvoiceDocumentReference;

class CreditLevel
{
    /** @var InvoiceDocumentReference */
    #[SerializedName('cac:InvoiceDocumentReference')]
    public InvoiceDocumentReference $InvoiceDocumentReference;

}
