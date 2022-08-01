<?php

namespace MakiniAdapter\MongoConverter;

trait Relation
{
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

    public static function lookupWithPipeline(
        string $from,
        array $let,
        mixed $pipeline,
        string $as,
        string $localFied = null,
        string $foreignField = null
    ): array {
        $lookup = [
            'from' => $from,
            'pipeline' => $pipeline,
            'as' => $as
        ];

        if ($localFied) {
            $lookup['localField'] = $localFied;
        }

        if ($foreignField) {
            $lookup['foreignField'] = $foreignField;
        }

        if ($let !== []) {
            $lookup['let'] = $let;
        }

        return [
            '$lookup' => $lookup
        ];
    }
}