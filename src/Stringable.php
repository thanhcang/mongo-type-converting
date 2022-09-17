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

    public static function substr(string $string, int $start = 0, int $end = 0): array
    {
        return [
            '$substr' => [
                $string,
                $start,
                $end
            ]
        ];
    }
}