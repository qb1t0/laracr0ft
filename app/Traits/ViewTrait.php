<?php

namespace App\Traits;

trait ViewTrait
{
    public static function getView($value)
    {
        return view('pages.'.$value);
    }
}