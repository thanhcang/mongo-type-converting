<?php


namespace MakiniAdapter\MongoConverter\Converts;

use MakiniAdapter\MongoConverter\MongoType;

class Decimal extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toDecimal';
    }

    public function getDefault(): float
    {
        return $this->default ?? 0.0;
    }
}
