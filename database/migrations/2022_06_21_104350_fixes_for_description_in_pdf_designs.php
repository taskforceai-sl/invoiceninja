<?php
/**
 * Invoice Ninja (https://invoice.theredsun.org).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2022. Invoice Ninja LLC (https://invoice.theredsun.org)
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */
use Illuminate\Database\Migrations\Migration;

class FixesForDescriptionInPdfDesigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\Artisan::call('ninja:design-update');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
