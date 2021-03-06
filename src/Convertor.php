<?php

namespace MakiniAdapter\MongoConverter;

class Convertor
{
    private string $key;
    private MongoType $mongo;

    /**
     * $type is type of convert class
     */
    public function __construct(string $key, MongoType $type)
    {
        $this->key = $key;
        $this->mongo = $type;
    }

    public function toArray(): array
    {
        return [
            '$ifNull' => [
                [
                    $this->mongo->type() => $this->key
                ],
                $this->mongo->getDefault()
            ]
        ];
    }
}
