<?php


namespace MakiniAdapter\MongoConverter\Converts;
use MakiniAdapter\MongoConverter\MongoType;

class MString extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toString';
    }
}
