<?php


namespace MakiniAdapter\MongoConverter;


use JetBrains\PhpStorm\ArrayShape;

trait Calculation
{
    #[ArrayShape(['$multiply' => "array"])]
    public static function multiply(
        array $expression
    ): array {
        return ['$multiply' => $expression];
    }

    #[ArrayShape(['$sum' => "array"])]
    public static function sum($expression): array {
        return ['$sum' => $expression];
    }
}