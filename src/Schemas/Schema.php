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
    const PART_KEY = 'partKey';
    const LOCATION_KEY = 'locationKey';
    const VENDOR_KEYS = 'vendorKeys';
    const ACCOUNT_KEY = 'accountKey';

    const MODEL_KEY = 'assetTemplateKey';
    const ASSET_TEMPLATE_KEYS = 'assetTemplateKeys';
    const TEAM_KEY = 'teamKey';
    const DOCUMENT_KEYS = 'documentKeys';
    const PARENT_KEY = 'parentKey';
    const PARENT_KEYS = 'parentKeys';

    const STATUS_KEY = 'statusKey';

    const NAME = 'name';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const NOTES = 'notes';
    const ACTIVE = 'isActive';
    const CATEGORY = 'categoryName';
    const MANUFACTURE_NAME = 'makeName';
    const MODEL_NAME = 'modelName';
    const SERIAL_KEY = 'serialNumber';
    const CRITICALITY = 'criticality';
    const ADDRESS = 'address';
    const CODE = 'code';
    const TEXT = 'text';
    const STATUS = 'status';
    const UOM = 'uom';
    const SEVERITY = 'severity';
    const TYPE = 'type';
    CONST WAREHOUSE_NAME = 'warehouseName';
    CONST CURRENCY = 'currency';

    const UPDATED_AT = 'updatedAt';
    const CREATED_AT = 'createdAt';
    const DELETED_AT = 'deletedAt';
    const ACTIVATED_AT = 'activatedAt';
    const COMPLETED_AT = 'completedAt';
    const DUE_AT = 'dueAt';

    const STARTED_AT = 'startedAt';
    const ENDED_AT = 'endedAt';

    const APPROVED_AT = 'approvedAt';

    const NEXT_SCHEDULED_AT = 'nextScheduledAt';
    const LAST_SCHEDULE_AT = 'lastScheduledAt';
    const LAST_COMPLETED_AT = 'lastCompletedAt';
    const LAST_COMPLETE_REMARKS = 'lastCompletionRemarks';
    const COMPLETE_REMARKS = 'completionRemarks';

    const USER_ASSIGNED_KEY = 'laborAssignedKey';
    const USER_COMPLETE_KEY = 'userCompletedKey';

    const CUSTOM_FIELDS = 'customFields';
    const DOCUMENTS = 'documents';
    const LOCATION_KEYS = 'locationKeys';
    const ORGANIZATION_KEY = 'organizationKey';
    const BILLING_ADDRESS = 'billingAddress';
    const CONTACT = 'contact';
    const STOREROOM_KEY = 'storeroomKey';
    const MAKE_COMPANY_KEY = 'makeCompanyKey';
    const CUSTOMER_KEY = 'customerKey';
    const ACCOUNT_KEYS = 'accountKeys';
    const PHYSICAL = 'isPhysical';
    const USER_MANAGER_KEY = 'userManagerKey';
    const DEFAULT = 'isDefault';
    const ASSET_DOWNTIME_KEY = 'assetDowntimeKey';
    const SERVICE_REQUEST_KEY = 'serviceRequestKey';
    const TASKS = 'tasks';
    const USER_APPROVED_KEY = 'userApprovedKey';
}
