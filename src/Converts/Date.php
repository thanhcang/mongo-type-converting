<?php

namespace MakiniAdapter\MongoConverter\Converts;

use MakiniAdapter\MongoConverter\MongoType;

class Date extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toDate';
    }
}