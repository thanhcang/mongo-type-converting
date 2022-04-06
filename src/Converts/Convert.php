<?php

namespace CangVo\MongoConverter\Converts;

class Convert
{
    protected mixed $default;

    public function __construct(mixed $default = null)
    {
        $this->default = $default;
    }

    public function getDefault(): mixed
    {
        return $this->default;
    }
}