<?php

namespace Uasoft\Badaso\Theme\LinkyTheme\Controllers;

use Uasoft\Badaso\Theme\LinkyTheme\Helpers\Configurations;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('linky-theme::pages.landing-page');
    // }

    public $prefix = 'badaso.theme.linky-theme';

    public function index()
    {
        $config = Configurations::index();
        $title = $config->siteTitle;

        $view = 'linky-theme::pages.landing-page';
        if (view()->exists($this->prefix . '.pages.landing-page')) {
            $view = $this->prefix . '.pages.landing-page';
        };
        return view($view, ['title' => $title]);
    }



}
