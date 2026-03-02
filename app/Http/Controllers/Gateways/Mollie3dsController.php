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

namespace App\Http\Controllers\Gateways;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gateways\Mollie\Mollie3dsRequest;

class Mollie3dsController extends Controller
{
    public function index(Mollie3dsRequest $request)
    {
        return $request->getCompanyGateway()
            ->driver($request->getClient())
            ->process3dsConfirmation($request);
    }
}
