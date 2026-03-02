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

namespace App\DataProviders;

class DesignBlocks
{
    public function __construct(
        public string $includes = '',
        public string $header = '',
        public string $body = '',
        public string $footer = ''
    ) {
    }
}
