<?php


namespace MakiniAdapter\MongoConverter\Schemas;

class PM extends Schema
{
    const SEVERITY = 'severity';
    const  PARTS = 'parts';

    const TRIGGER = 'triggers';
    const TRIGGER_UNIT = 'unit';
    const TRIGGER_INTERVAL = 'interval';
    const TRIGGER_RECURRING = 'recurring';
    const TRIGGER_DUE_AT = 'dueAt';

    const ROLE_NAME = 'roleName';
    const ESTIMATE_TIME = 'estimatedTime';
    const DOCUMENT_KEY = 'documentKey';
    const DOCUMENT_PAGE = 'documentPage';
}