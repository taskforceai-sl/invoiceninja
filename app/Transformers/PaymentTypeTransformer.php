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

namespace App\Transformers;

use App\Models\Payment;

class PaymentTypeTransformer extends EntityTransformer
{
    public function transform(Payment $payment)
    {
        return [
            'name' => $payment->translatedType()
        ];
    }
}
