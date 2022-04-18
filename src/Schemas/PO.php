<?php

namespace MakiniAdapter\MongoConverter\Schemas;

class PO extends Schema
{
    CONST ORDER_NO         = 'orderNo';
    CONST ORDER_DATE       = 'orderDate';
    CONST SHIPPING_METHOD  = 'shippingMethod';
    CONST DELIVERY_ADDRESS = 'deliveryAddress';
    CONST TERMS            = 'terms';

    CONST TOTAL_NET_VALUE   = 'totalNetValue';
    CONST TOTAL_TAX_VALUE   = 'totalTaxValue';
    CONST TOTAL_GROSS_VALUE = 'totalGrossValue';

    CONST LINES = 'lines';
}
