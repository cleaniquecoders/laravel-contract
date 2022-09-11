<?php

namespace Bekwoh\LaravelContract\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bekwoh\LaravelContract\LaravelContract
 */
class LaravelContract extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bekwoh\LaravelContract\LaravelContract::class;
    }
}
