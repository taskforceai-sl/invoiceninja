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

namespace App\Export\Decorators;

use App\Models\VendorContact;

class VendorContactDecorator implements DecoratorInterface
{
    public function transform(string $key, mixed $entity): mixed
    {
        $contact = false;

        if ($entity instanceof VendorContact) {
            $contact = $entity;
        } elseif ($entity->contacts) {
            $contact = $entity->contacts()->first();
        }

        if ($contact && method_exists($this, $key)) {
            return $this->{$key}($contact);
        } elseif ($contact && ($contact->{$key} ?? false)) {
            return $contact->{$key} ?? '';
        }

        return '';

    }


}
