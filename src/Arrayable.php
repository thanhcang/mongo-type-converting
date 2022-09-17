<?php


namespace MakiniAdapter\MongoConverter;

use Illuminate\Support\Arr;

trait Arrayable
{
    public static function arrayElemAt($expr, $index): array
    {
        return ['$arrayElemAt' => [$expr, $index]];
    }

    public static function arrayFirst($expr): array
    {
        return static::arrayElemAt($expr, 0);
    }

    public static function arrayLast($expr): array
    {
        return ['$last' => $expr];
    }

    public static function pluck(mixed $array, mixed $field): array
    {
        return [
            '$map' => [
                'input' => $array,
                'as' => 'i',
                'in' => [
                    '$getField' => ['input' => '$$i', 'field' => $field],
                ],
            ],
        ];
    }

    public static function pluckWithFields(string $input, string $as, array $in): array
    {
        return [
            '$map' => [
                'input' => $input,
                'as' => $as,
                'in' => $in
            ]
        ];
    }

    public static function indexOfArray($array, $search): array
    {
        return ['$indexOfArray' => [$array, $search]];
    }

    public static function unwind(string $path, bool $preserveNullAndEmptyArrays = false): array
    {
        return [
            '$unwind' => [
                'path' => $path,
                'preserveNullAndEmptyArrays' => $preserveNullAndEmptyArrays
            ]
        ];
    }

    public static function unionWith(string $coll, array $pipeline): array
    {
        return ['$unionWith' => ['coll' => $coll, 'pipeline' => $pipeline]];
    }

    public static function toCustomFields(array $fields): array
    {
        $addFields = [];

        foreach ($fields as $field) {
            $addFields = array_merge($addFields,
                [
                    $field => ['$ifNull' => ['$' . "$field", []]]
                ]
            );
        }

        return $addFields;
    }

    public static function inArray(string $key, string $keys)
    {
        return ['$in' => [$key, $keys]];
    }
}