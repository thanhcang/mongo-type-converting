<?php


namespace MakiniAdapter\MongoConverter;

trait Comparision
{
    public static function isArray(string $field): array
    {
        return ['$isArray' => $field];
    }

    public static function cond( array $ifConf, mixed $thenConf, mixed $elseConf = null): mixed
    {
        return [
            '$cond' => [
                'if' => $ifConf,
                'then' => $thenConf,
                'else' => $elseConf
            ]

        ];
    }

    public static function eq(string $field, mixed $value): array
    {
        return ['$eq' => [$field, $value]];
    }

    public static function ne(string $field, mixed $value): array
    {
        return ['$ne' => [$field, $value]];
    }

    public static function match(string $filed, string $value): array
    {
        return [
            '$match' => [
                $filed => $value,
            ],
        ];
    }

    public static function matchWithNeField(string $field, mixed $value): array
    {
        return [
            '$match' => [
                $field => [
                    '$ne' => $value,
                ],
            ],
        ];
    }

    public static function matchWithEqField(string $field, mixed $value): array
    {
        return [
            '$match' => [
                $field => [
                    '$eq' => $value,
                ],
            ],
        ];
    }

    public static function matchExistsField(string $field, mixed $value): array
    {
        return [
            '$match' => [
                $field => [
                    '$exists' => $value,
                ],
            ],
        ];
    }
}