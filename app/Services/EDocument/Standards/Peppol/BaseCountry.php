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

namespace App\Services\EDocument\Standards\Peppol;

use App\Models\Invoice;
use App\Services\EDocument\Standards\Peppol;

class BaseCountry
{
    public function __construct(protected Invoice $invoice)
    {
    }

}
