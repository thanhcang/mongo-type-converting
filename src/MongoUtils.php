<?php

namespace MakiniAdapter\MongoConverter;

use Illuminate\Support\Str;
use MakiniAdapter\MongoConverter\Converts\Boolean;
use MakiniAdapter\MongoConverter\Converts\Date;
use MakiniAdapter\MongoConverter\Converts\Decimal;
use MakiniAdapter\MongoConverter\Converts\Double;
use MakiniAdapter\MongoConverter\Converts\Integer;
use MakiniAdapter\MongoConverter\Converts\MString;

class MongoUtils
{
    use Calculation;

    public static function lookup(string $from, string $localField, string $foreignField, string $as): array
    {
        return [
            '$lookup' => [
                'from' => $from,
                'localField' => $localField,
                'foreignField' => $foreignField,
                'as' => $as
            ]
        ];
    }

    public static function addFields($fields): array
    {
        return ['$addFields' => $fields];
    }

    public static function project($fields): array
    {
        return ['$project' => $fields];
    }

    public static function arrayElemAt($expr, $index): array
    {
        return ['$arrayElemAt' => [$expr, $index]];
    }

    public static function arrayFirst($expr): array
    {
        return static::arrayElemAt($expr, 0);
    }

    public static function toString(string $expression): array
    {
        return self::typeOf(MString::class, $expression);
    }

    public static function toDate(string $expression): array
    {
        return self::typeOf(Date::class, $expression);
    }

    public static function toInt(string $expression, int $default = 0): array
    {
        return self::typeOf(Integer::class, $expression, $default);
    }

    public static function toDouble(string $expression, float $default = 0.0): array
    {
        return self::typeOf(Double::class, $expression, $default);
    }

    public static function toDecimal(string $expression, float $default = 0.0): array
    {
        return self::typeOf(Decimal::class, $expression, $default);
    }

    public static function toBool(string $expression, bool $default = false): array
    {
        return self::typeOf(Boolean::class, $expression, $default);
    }

    public static function concat(...$args): array
    {
        if (count($args) === 0) {
            trigger_error('Invalid argument count');
        }
        if (is_array($args[0])) {
            $args = $args[0];
        }
        return ['$concat' => $args];
    }

    public static function unset(...$args): array
    {
        if (count($args) === 0) {
            trigger_error('Invalid argument count');
        }
        if (is_array($args[0])) {
            $args = $args[0];
        }
        return ['$unset' => $args];
    }

    public static function ifNull($expr, $then): array
    {
        return ['$ifNull' => [$expr, $then]];
    }

    public static function createView(string $viewName, string $viewOn, array $pipeline): array
    {
        return [
            'create' => $viewName,
            'viewOn' => $viewOn,
            'pipeline' => $pipeline,
        ];
    }

    public static function unwind($path, $preserveNullAndEmptyArrays = false): array
    {
        return ['$unwind' => compact($path, $preserveNullAndEmptyArrays)];
    }

    public static function unionWith(string $coll, array $pipeline): array
    {
        return ['$unionWith' => compact($coll, $pipeline)];
    }

    /**
     * eg : parse to int
     * m::toValue('$toInt', m::decimal('$field'))
     */
    public static function toValue(string $type, mixed $value) : array
    {
        return [$type => $value];
    }

    public static function typeOf(mixed $convertType, string $expression, mixed $default = null): array
    {
        $mongoType = new $convertType($default);
        $convertor = new Convertor($expression, $mongoType);

        return $convertor->toArray();
    }

    public static function toKey(
        string $fnc,
        string $key = 'key',
        string $expression = '$_id'
    ): array {
        preg_match('/get(.+)Output/', $fnc, $matches);
        $name = Str::upper($matches[1]);

        $mapping = [
            'SITES' => "%%COLLECTION_SITES%%",
            'ASSETS' => "%%COLLECTION_ASSETS%%" ,
            'WORKORDERS' => "%%COLLECTION_WORK_ORDERS%%",
            'PARTS' => "%%COLLECTION_PARTS%%",
            'PURCHASEORDERS' => '%%COLLECTION_PURCHASE_ORDERS%%' ,
            'PREVENTIVEMAINTENANCE' => '%%COLLECTION_PM%%',
            'MODELS' => '%%COLLECTION_MODELS%%',
            'COUNTERS' => '%%COLLECTION_COUNTERS%%',
            'VENDORS' => '%%COLLECTION_VENDORS%%',
            'ASSETSDOWNTIME' => '10',
            'WORKREQUESTS' => '11',
            'COUNTERSREADINGS' => '12' ,
            'DOCUMENTS' =>  '13',
            'TEAMS' => '14',
        ];

        if (!in_array($name, array_keys($mapping))) {
            throw new \Exception('Do no support' . $name);
        }

        $coll = $mapping[$name];

        return [
            '$addFields' => [
                $key => [
                    '$concat' => [$coll, $expression],
                ],
            ]
        ];
    }
}
