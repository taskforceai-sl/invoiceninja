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

namespace App\Events\Product;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Queue\SerializesModels;

class ProductWasCreated
{
    use SerializesModels;

    public function __construct(public Product $product, public mixed $input, public Company $company, public array $event_vars)
    {
    }
}
