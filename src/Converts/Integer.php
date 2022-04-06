<?php


namespace CangVo\MongoConverter\Converts;

use CangVo\MongoConverter\MongoType;
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
