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

namespace Tests\Unit;

use App\DataMapper\CompanySettings;
use Tests\TestCase;

/**
 *
 */
class PdfVariablesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->settings = CompanySettings::defaults();
    }

    public function testPdfVariableDefaults()
    {
        $this->assertTrue(is_array($this->settings->pdf_variables->client_details));
    }
}
