<?php

namespace Database\Seeders\Badaso\LinkyTheme;

use Illuminate\Database\Seeder;

class BadasoLinkyThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LinkyThemeMenusSeeder::class);
        $this->call(LinkyThemeFixedMenuItemSeeder::class);
        $this->call(LinkyThemePermissionsSeeder::class);
        $this->call(LinkyThemeContentsSeeder::class);
        $this->call(LinkyThemeConfigurationsSeeder::class);
    }
}
