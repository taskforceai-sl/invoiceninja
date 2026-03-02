<?php

/**
 * Red Invoice (https://invoice.theredsun.org).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2025. The Red Sun
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace App\Services\EDocument\Standards\Validation;

use App\Models\Client;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\RecurringInvoice;

interface EntityLevelInterface
{
    public function checkClient(Client $client): array;

    public function checkCompany(Company $company): array;

    public function checkInvoice(Invoice $invoice): array;

    public function checkRecurringInvoice(RecurringInvoice $recurring_invoice): array;

}
