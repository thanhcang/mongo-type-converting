<?php


namespace MakiniAdapter\MongoConverter\Converts;

use MakiniAdapter\MongoConverter\MongoType;
class Integer extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toInt';
    }

    public function getDefault(): int
    {
        return $this->default ?? 0;
    }
}
