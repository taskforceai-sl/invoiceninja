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

namespace App\Livewire\Flow2;

use Livewire\Component;

class DocuNinja extends Component
{
    public function mount()
    {

    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return render('flow2.docu-ninja');
    }

    public function exception($e, $stopPropagation)
    {

        app('sentry')->captureException($e);
        nlog($e->getMessage());
        $stopPropagation();

    }
}