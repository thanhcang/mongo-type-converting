<?php


namespace CangVo\MongoConverter;

interface MongoType
{
    public function type(): string;

    public function getDefault(): mixed;
}