<?php

namespace MakiniAdapter\MongoConverter\Schemas;

class LineItem extends Schema
{
    CONST LINE_NO  = 'lineNo';
    CONST LINE_REF = 'lineRef';
    CONST QTY      = 'qty';
    CONST COST     = 'cost';

    CONST LINE_TOTAL_VALUE = 'lineTotalValue';
    CONST LINE_TAX_VALUE   = 'lineTaxValue';
}
