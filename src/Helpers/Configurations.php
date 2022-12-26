<?php

namespace Uasoft\Badaso\Theme\LinkyTheme\Helpers;

use Uasoft\Badaso\Models\Configuration;

class Configurations
{
    public static function index()
    {
        $configurations = Configuration::where('group', 'linkyTheme')->get();
        foreach ($configurations as $key => $config) {
            if ($config->key == 'linkyThemeSiteTitle') {
                $site_title = $config->value;
            }

        }

        $title = (object)[
            "siteTitle" => $site_title
        ];
        return $title;
    }
}
