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

enum HttpVerb: string
{
    case POST = 'post';
    case PUT = 'put';
    case GET = 'get';
    case PATCH = 'patch';
    case DELETE = 'delete';
}
