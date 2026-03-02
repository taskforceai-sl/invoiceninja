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

namespace App\Events\PurchaseOrder;

use App\Models\Company;
use App\Models\PurchaseOrderInvitation;
use Illuminate\Queue\SerializesModels;

/**
 * Class PurchaseOrderWasEmailed.
 */
class PurchaseOrderWasEmailed
{
    use SerializesModels;

    public function __construct(public PurchaseOrderInvitation $invitation, public Company $company, public array $event_vars)
    {
    }
}
