<?php

namespace App\Traits;

trait ReturnBoolean
{
    public function returnTrueOrfalse($value){
        return $value == 1 ? true : false;
    }

    public function returnZeroOrOne($value): int
    {
        return $value == true ? 1 : 0;
    }
}
