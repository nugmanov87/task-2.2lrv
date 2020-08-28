<?php


namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class ConfigFacad extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ConfigFacad';
    }
}
