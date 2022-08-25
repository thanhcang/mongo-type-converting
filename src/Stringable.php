<?php

namespace MakiniAdapter\MongoConverter;

trait Stringable
{
    public static function split(string $string, string $delimeter) : array{
        return [
            '$split' => [
                $string,
                $delimeter
            ]
        ];
    }
}