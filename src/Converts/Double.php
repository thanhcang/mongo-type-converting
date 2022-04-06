<?php


namespace MakiniAdapter\MongoConverter\Converts;

use MakiniAdapter\MongoConverter\MongoType;
class Double extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toDouble';
    }

    public function getDefault(): float
    {
        return $this->default ?? 0.0;
    }
}
