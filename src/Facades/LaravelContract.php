<?php

namespace CleaniqueCoders\LaravelContract\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CleaniqueCoders\LaravelContract\LaravelContract
 */
class LaravelContract extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CleaniqueCoders\LaravelContract\LaravelContract::class;
    }
}
