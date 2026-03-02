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

namespace App\Http\Requests\ClientPortal\Credits;

use App\Http\ViewComposers\PortalComposer;
use Illuminate\Foundation\Http\FormRequest;

class ShowCreditsRequest extends FormRequest
{
    public function authorize()
    {
        return (bool)(auth()->guard('contact')->user()->company->enabled_modules & PortalComposer::MODULE_CREDITS);
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
