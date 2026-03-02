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

namespace App\Http\Requests\Quickbooks;

use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class SyncQuickbooksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'clients' => 'required_with:invoices,quotes,payments|in:email,name,always_create',
            'products' => 'sometimes|in:product_key,always_create',
            'invoices' => 'sometimes|in:number,always_create',
            'quotes' => 'sometimes|in:number,always_create',
            'payments' => 'sometimes|in:always_create',
            'vendors' => 'sometimes|in:email,name,always_create',
        ];
    }

}
