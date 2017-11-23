<?php

namespace App\Service;

class Checker
{
    public function isVerified($value)
    {
        return $value?1:0;
    }
}
