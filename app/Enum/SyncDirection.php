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

namespace App\Enum;

enum SyncDirection: string
{
    case PUSH = 'push'; // only creates and updates records created by Red Invoice.
    case PULL = 'pull'; // creates and updates record from QB.
    case BIDIRECTIONAL = 'bidirectional'; // creates and updates records created by Red Invoice and from QB.
    case NONE = 'none'; // no sync.
}
