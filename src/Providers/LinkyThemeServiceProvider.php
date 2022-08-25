<?php

namespace Uasoft\Badaso\Theme\LinkyTheme\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Uasoft\Badaso\Theme\LinkyTheme\Commands\LinkyThemeSetup;
use Uasoft\Badaso\Theme\LinkyTheme\Facades\LinkyTheme as FacadesLinkyTheme;
use Uasoft\Badaso\Theme\LinkyTheme\LinkyTheme;

class LinkyThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('LinkyTheme', FacadesLinkyTheme::class);

        $this->app->singleton('badaso-linky-theme', function () {
            return new LinkyTheme();
        });

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'badaso-linky');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'linky-theme');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');


        $this->publishes([
            __DIR__.'/../Seeder'                       => database_path('seeders/Badaso/LinkyTheme'),
            __DIR__.'/../Config/badaso-linky-theme.php' => config_path('badaso-linky-theme.php'),
            __DIR__.'/../Images/thumbnail-linky/' => storage_path('app/public/photos/1'),
            __DIR__.'/../resources/customization/'     => resource_path('js/badaso/theme/linky-theme/'),
            __DIR__ . '/../Tailwind/'                      => base_path(),
        ], 'BadasoLinkyTheme');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/uasoft-indonesia/linky-theme'),
        ], 'BadasoLinkyThemeViews');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommands();
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(LinkyThemeSetup::class);
    }
}
