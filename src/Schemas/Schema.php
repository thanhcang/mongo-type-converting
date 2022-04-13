<?php

namespace MakiniAdapter\MongoConverter\Schemas;

use Illuminate\Support\Fluent;

class Schema extends Fluent
{
    const KEY = 'key';
    const SITE_KEY = 'siteKey';
    const SITE_KEYS = 'siteKeys';
    const ASSET_KEY = 'assetKey';
    const ASSET_KEYS = 'assetKeys';
    const VENDOR_KEY = 'vendorKey';

    const MODEL_KEY = 'modelKey';
    const TEAM_KEY = 'teamKey';
    const DOCUMENT_KEYS = 'documentKeys';
    const PARENT_KEY = 'parentKey';
    const PARENT_KEYS = 'parentKeys';

    const NAME = 'name';
    const DESCRIPTION = 'description';
    const NOTES = 'notes';
    const ACTIVE = 'isActive';
    const CATEGORY = 'categoryName';
    const MANUFACTURE_NAME = 'manufacturerName';
    const MODEL_NAME = 'modelName';
    const SERIAL_KEY = 'serialKey';
    const CRITICALITY = 'criticality';
    const ADDRESS = 'address';
    const CODE = 'code';
    const TEXT = 'text';
    const STATUS = 'status';


    const UPDATED_AT = 'updatedAt';
    const CREATED_AT = 'createdAt';
    const DELETED_AT = 'deletedAt';

    const STARTED_AT = 'startedAt';
    const ENDED_AT = 'endedAt';

    const APPROVED_AT = 'approvedAt';

    const NEXT_SCHEDULED_AT = 'nextScheduledAt';
    const LAST_SCHEDULE_AT = 'lastScheduledAt';
    const LAST_COMPLETED_AT = 'lastCompletedAt';
    const LAST_COMPLETE_REMARKS = 'lastCompletionRemarks';

}