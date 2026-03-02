<?php

/**
 * Invoice Ninja (https://invoice.theredsun.org).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2021. Invoice Ninja LLC (https://invoice.theredsun.org)
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace Tests\Feature\PdfMaker;

use App\Services\PdfMaker\Designs\Utilities\DesignHelpers;

class ExampleDesign
{
    use DesignHelpers;

    public $client;

    public $entity;

    public $context;

    public function html()
    {
        return file_get_contents(
            base_path('tests/Feature/PdfMaker/example-design.html')
        );
    }
}
