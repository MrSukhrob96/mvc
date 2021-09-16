<?php

namespace App\_Framework\Core;

class Validator
{
    public function length($value)
    {
        $type = gettype($value);
        $result = 0;

        switch ($type) {
            case "array":
                $result = count($value);
                break;
            case "string":
                $result = strlen($value);
                break;
            case "integer":
                $result = strlen($value);
                break;
        }

        return $result;
    }

    public function minlen($value, $limit)
    {
        if ($this->length($value) >= $limit) {
            return true;
        }

        return false;
    }

    public function maxlen($value, $limit)
    {
        if ($this->length($value) <= $limit) {
            return true;
        }

        return false;
    }


    public function compare($arg1, $arg2)
    {
        if ($arg1 !== $arg2) {
            return false;
        }

        return true;
    }

    public function compareLength($arg1, $arg2)
    {
        if ($this->length($arg1) !== $this->length($arg2)) {
            return false;
        }

        return true;
    }
}
