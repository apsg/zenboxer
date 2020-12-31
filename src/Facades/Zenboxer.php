<?php

namespace Apsg\Zenboxer\Facades;

use Illuminate\Support\Facades\Facade;

class Zenboxer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'zenboxer';
    }
}
