<?php


namespace CangVo\MongoConverter\Converts;

use CangVo\MongoConverter\MongoType;
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
