/**
 * Red Invoice (https://invoice.theredsun.org)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2021. The Red Sun
 *
 * @license https://www.elastic.co/licensing/elastic-license 
 */

import linkifyUrls from 'linkify-urls';

document
    .querySelectorAll('[data-ref=entity-terms]')
    .forEach((text) => {

        if (linkifyUrls === 'function') {

            text.innerHTML = linkifyUrls(text.innerText, {
                attributes: {target: '_blank', class: 'text-primary'}
            });

        }

    });
