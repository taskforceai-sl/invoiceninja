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

namespace App\Repositories;

use App\Helpers\Invoice\InvoiceSum;
use App\Models\RecurringQuote;
use Illuminate\Http\Request;

/**
 * RecurringQuoteRepository.
 */
class RecurringQuoteRepository extends BaseRepository
{
    public function save(Request $request, RecurringQuote $quote): ?RecurringQuote
    {
        $quote->fill($request->input());

        $quote->save();

        $quote_calc = new InvoiceSum($quote);

        $quote = $quote_calc->build()->getQuote();

        return $quote;
    }
}
