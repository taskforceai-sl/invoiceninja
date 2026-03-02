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

namespace App\Factory;

use App\Models\TaxRate;

class TaxRateFactory
{
    public static function create($company_id, $user_id): TaxRate
    {
        $tax_rate = new TaxRate();

        $tax_rate->name = '';
        $tax_rate->rate = 0;
        $tax_rate->company_id = $company_id;
        $tax_rate->user_id = $user_id;

        return $tax_rate;
    }
}
