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

namespace App\Services\Pdf;

class Markdown
{
    public static function parse(string $markdown): string
    {
        $converter = new \League\CommonMark\CommonMarkConverter([
            'allow_unsafe_links' => false,
            // 'html_input' => 'allow',
        ]);

        return $converter->convert($markdown);

    }
}
