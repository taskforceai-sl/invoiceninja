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

namespace App\Services\Report\TaxPeriod;

use App\Models\Invoice;

/**
 * Generic tax calculator for regions without specific requirements
 */
class GenericTaxCalculator implements RegionalTaxCalculator
{
    public function getHeaders(): array
    {
        return [];
    }

    public function calculateColumns(Invoice $invoice, float $amount): array
    {
        return [];
    }

    public static function supports(string $country_iso): bool
    {
        // Generic calculator supports all countries not handled by specific calculators
        return true;
    }
}
