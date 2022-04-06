<?php


namespace MakiniAdapter\MongoConverter\Converts;

use MakiniAdapter\MongoConverter\MongoType;

class Boolean extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toBool';
    }

    public function getDefault(): bool
    {
        return $this->default ?? false;
    }
}
