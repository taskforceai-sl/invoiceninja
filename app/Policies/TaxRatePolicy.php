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

namespace App\Policies;

use App\Models\User;

/**
 * Class TaxRatePolicy.
 */
class TaxRatePolicy extends EntityPolicy
{
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }
}
