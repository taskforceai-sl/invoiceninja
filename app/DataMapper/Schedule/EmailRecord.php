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

namespace App\DataMapper\Schedule;

class EmailRecord
{
    /**
     * Defines the template name
     *
     * @var string
     */
    public string $template = 'email_record';

    /**
     * Defines the template name
     *
     * @var string
     */
    public string $entity = ''; // invoice, credit, quote, purchase_order

    /**
     * Defines the template name
     *
     * @var string
     */
    public string $entity_id = '';

}
