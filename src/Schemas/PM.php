<?php


namespace MakiniAdapter\MongoConverter\Schemas;

class PM extends Schema
{
    const WORK_REQUEST_KEY = 'workRequestKey';
    const PM_KEY = 'pmKey';

    const  PARTS = 'parts';
    const  INSTRUCTIONS = 'instructions';

    const TRIGGER = 'triggers';
    const TRIGGER_UOM = 'uom';
    const TRIGGER_TYPE = 'type';
    const TRIGGER_INTERVAL = 'interval';
    const TRIGGER_RECURRING = 'recurring';
    const TRIGGER_DUE_AT = 'dueAt';

    const ROLE_NAME = 'roleName';
    const ESTIMATE_TIME = 'estimatedTime';
    const DOCUMENT_KEY = 'documentKey';
    const DOCUMENT_PAGE = 'documentPage';
    const CATEGORY_CODE = 'categoryCode';
    const REQUIRES_MATERIALS = 'requiresMaterials';

}