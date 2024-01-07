<?php

namespace askancy\LaravelShortcodePlus\Facades;

use Illuminate\Support\Facades\Facade;

// @codeCoverageIgnoreStart
/**
 * @see \askancy\LaravelShortcodePlus\LaravelShortcodePlus
 */
class LaravelShortcodePlus extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \askancy\LaravelShortcodePlus\LaravelShortcodePlus::class;
    }
}
// @codeCoverageIgnoreEnd
