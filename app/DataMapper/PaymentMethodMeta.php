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

namespace App\DataMapper;

class PaymentMethodMeta
{
    /** @var string */
    public $exp_month;

    /** @var string */
    public $exp_year;

    /** @var string */
    public $brand;

    /** @var string */
    public $last4;

    /** @var int */
    public $type;

    /** @var string */
    public $state;
}
