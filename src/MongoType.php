<?php


namespace MakiniAdapter\MongoConverter;

interface MongoType
{
    public function type(): string;

    public function getDefault(): mixed;
}