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

namespace App\Events\RecurringQuote;

use App\Models\Company;
use App\Models\RecurringQuote;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Class RecurringQuoteWasUpdated.
 */
class RecurringQuoteWasUpdated
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;


    public function __construct(public RecurringQuote $recurring_quote, public Company $company, public array $event_vars)
    {
    }
}
