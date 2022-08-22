<?php

namespace Uasoft\Badaso\Theme\LinkyTheme\Facades;

use Illuminate\Support\Facades\Facade;

class LinkyTheme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'badaso-linky-theme';
    }
}
