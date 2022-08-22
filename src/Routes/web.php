<?php

use Illuminate\Support\Facades\Route;
use Uasoft\Badaso\Theme\LinkyTheme\Controllers\HomeController;



$linky_route_prefix = config('badaso-linky-theme.linky_theme_prefix');

Route::prefix($linky_route_prefix)
    ->as('badaso.linky-theme.')
    ->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');


    });

