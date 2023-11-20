<?php

namespace MakiniAdapter\MongoConverter\Schemas;

class Address extends Schema
{
    const COUNTRY_NAME  = 'country';
    const STATE = 'state';
    const CITY          = 'city';
    const POST_CODE     = 'postCode';
    const ADDRESS_LINES = 'addressLines';
    const PHONE         = 'phone';
    const EMAIL         = 'email';
}
