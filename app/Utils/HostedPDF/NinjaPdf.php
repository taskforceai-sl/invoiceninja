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

namespace App\Utils\HostedPDF;

use GuzzleHttp\RequestOptions;

class NinjaPdf
{
    private $url = 'https://pdf.invoicing.co/api/';

    public function build($html)
    {
        $client = new \GuzzleHttp\Client(['headers' => [
            'X-Ninja-Token' => 'test_token_for_now',
            'X-URL' => config('ninja.app_url'),
            ],
        ]);

        $response = $client->post($this->url, [
            RequestOptions::JSON => ['html' => $html],
        ]);


        return $response->getBody()->getContents();
    }

}
