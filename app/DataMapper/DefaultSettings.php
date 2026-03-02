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

namespace App\DataMapper;

use App\Models\User;
use stdClass;

/**
 * Class DefaultSettings.
 */
class DefaultSettings extends BaseSettings
{
    /**
     * @var int
     */
    public static $per_page = 25;

    /**
     * @return stdClass
     */
    public static function userSettings(): stdClass
    {
        return (object) [
            //    class_basename(User::class) => self::userSettingsObject(),
        ];
    }

}
