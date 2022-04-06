<?php


namespace CangVo\MongoConverter\Converts;
use CangVo\MongoConverter\MongoType;

class MString extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toString';
    }
}
