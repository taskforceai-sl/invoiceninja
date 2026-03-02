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

namespace App\Casts;

use App\DataMapper\QuickbooksSettings;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class QuickbooksSettingsCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        if (is_null($value)) {
            return new QuickbooksSettings();
        }

        $data = json_decode($value, true);
        return QuickbooksSettings::fromArray($data);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        if ($value instanceof QuickbooksSettings) {
            return json_encode($value->toArray());
        }

        return null;
    }
}
