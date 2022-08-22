<?php

use Illuminate\Support\Facades\Route;
use Uasoft\Badaso\Middleware\ApiRequest;
use Uasoft\Badaso\Middleware\BadasoCheckPermissions;
use Uasoft\Badaso\Theme\LinkyTheme\Helpers\Route as HelpersRoute;
use Uasoft\Badaso\Theme\LinkyTheme\Controllers\HomeController;

$api_route_prefix = \config('badaso.api_route_prefix');





