<?php

namespace CangVo\MongoConverter\Converts;

use CangVo\MongoConverter\MongoType;

class Date extends Convert implements MongoType
{
    public function type(): string
    {
        return '$toDate';
    }
}