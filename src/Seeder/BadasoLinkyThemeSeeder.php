<?php

namespace Database\Seeders\Badaso\LandyTheme;

use Illuminate\Database\Seeder;

class BadasoLandyThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LandyThemeMenusSeeder::class);
        $this->call(LandyThemeFixedMenuItemSeeder::class);
        $this->call(LandyThemePermissionsSeeder::class);
        $this->call(LandyThemeContentsSeeder::class);
        $this->call(LandyThemeConfigurationsSeeder::class);
    }
}
