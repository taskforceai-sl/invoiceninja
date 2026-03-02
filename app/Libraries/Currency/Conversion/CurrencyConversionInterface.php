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

namespace App\Libraries\Currency\Conversion;

interface CurrencyConversionInterface
{
    public function convert($amount, $from_currency_id, $to_currency_id, $date = null);

    public function exchangeRate($from_currency_id, $to_currency_id, $date = null);
}
