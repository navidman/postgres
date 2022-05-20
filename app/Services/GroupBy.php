<?php


namespace App\Services;


use Illuminate\Support\Facades\Facade;

class GroupBy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'groupBy';
    }
}
