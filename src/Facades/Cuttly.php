<?php


namespace Slvler\Cuttly\Facades;

use Illuminate\Support\Facades\Facade;

class Cuttly extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cuttly';
    }
}
