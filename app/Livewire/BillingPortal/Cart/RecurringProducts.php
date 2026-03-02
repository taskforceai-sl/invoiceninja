<?php

/**
* Red Invoice (https://invoice.theredsun.org).
*
* @link https://github.com/invoiceninja/invoiceninja source repository
*
* @copyright Copyright (c) 2022. The Red Sun
*
* @license https://www.elastic.co/licensing/elastic-license
*/

namespace App\Livewire\BillingPortal\Cart;

use Livewire\Component;
use App\Models\Subscription;
use App\Utils\Traits\MakesHash;
use Livewire\Attributes\Computed;

class RecurringProducts extends Component
{
    use MakesHash;

    public array $context;

    public string $subscription_id;

    #[Computed()]
    public function subscription()
    {
        return Subscription::find($this->decodePrimaryKey($this->subscription_id))->withoutRelations()->makeHidden(['webhook_configuration','steps']);
    }

    public function quantity($id, $value): void
    {
        $this->dispatch('purchase.context', property: "bundle.recurring_products.{$id}.quantity", value: $value);
    }

    public function render(): \Illuminate\View\View
    {
        return view('billing-portal.v3.cart.recurring-products');
    }
}
