<?php


namespace MakiniAdapter\MongoConverter\Schemas;


class Part extends Schema
{
    const PART_NUMBER = 'partNumber';
    const VENDOR_KEYS = 'vendorKeys';
    const COST = 'cost';

    const INVENTORY = 'inventory';
    const INVENTORY_CODE = 'code';
    const INVENTORY_NAME = 'name';
    const INVENTORY_QUANTITY = 'quantity';
    const INVENTORY_UPDATE_AT = 'updatedAt';
    const MINIMUM_QUANTITY = 'minimumQuantity';
    const IS_ASSEMBLY = 'isAssembly';
    const DRAWINGS = 'drawings';
    const DRAWINGS_DRAWING_NO = 'drawingNo';
    const DRAWINGS_DRAWING_POS = 'drawingPos';
    const DRAWINGS_REFERENCE_NO = 'referenceNo';
    const DRAWINGS_REFERENCE_POS = 'referencePos';
    const DRAWINGS_DOCUMENT_KEY = 'documentKey';
    const DRAWINGS_DOCUMENT_PAGE = 'documentPage';

    const PART_KEY = 'partKey';
}