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

namespace App\Http\ValidationRules\Account;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * Class EmailBlackListRule.
 */
class EmailBlackListRule implements ValidationRule
{
    public array $blacklist = [
        'noddy@invoice.theredsun.org',
    ];


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        if (in_array($value, $this->blacklist)) {
            $fail('This email address is blacklisted, if you think this is in error, please email contact@invoice.theredsun.org');
        }

    }

}
