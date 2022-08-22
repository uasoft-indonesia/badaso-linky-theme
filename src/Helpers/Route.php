<?php

namespace Uasoft\Badaso\Theme\LinkyTheme\Helpers;

class Route
{
    public static function getController($key)
    {
        // get config 'controllers' from config/badaso-linky-theme.php
        $controllers = config('badaso-linky-theme.controllers');

        // if the key is not found, return $key
        if (!isset($controllers[$key])) {
            return 'Uasoft\\Badaso\\Theme\\LinkyTheme\\Controllers\\'.$key;
        }

        // return the value of the key
        return $controllers[$key];
    }
}
