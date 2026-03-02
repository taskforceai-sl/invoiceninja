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

namespace App\Utils\Traits;

/**
 * Class ChecksEntityStatus.
 */
trait ChecksEntityStatus
{
    public function entityIsDeleted($entity)
    {
        return $entity->is_deleted;
    }

    public function disallowUpdate()
    {
        return response()->json(['message' => 'Record is deleted and cannot be edited. Restore the record to enable editing'], 400);
    }
}
