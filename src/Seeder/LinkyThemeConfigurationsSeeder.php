<?php

namespace Database\Seeders\Badaso\LinkyTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\Configuration;

class LinkyThemeConfigurationsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $settings = [
                0 => [
                    'key'          => 'LinkyThemeNavbarTitle',
                    'display_name' => 'Navigation Bar Title',
                    'value'        => 'Linky Theme',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 1,
                    'group'        => 'linkyTheme',
                    'can_delete'   => 0,
                ],
                1 => [
                    'key'          => 'LinkyThemeFacebookId',
                    'display_name' => 'Facebook ID for comment',
                    'value'        => '',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 2,
                    'group'        => 'linkyTheme',
                    'can_delete'   => 0,
                ],
                2 => [
                    'key'          => 'LinkyThemeAdsId',
                    'display_name' => 'Advertisement column',
                    'value'        => '',
                    'details'      => '',
                    'type'         => 'type_image',
                    'order'        => 3,
                    'group'        => 'linkyTheme',
                    'can_delete'   => 0,
                ],
            ];

            foreach ($settings as $key => $value) {
                Configuration::where('key', $value['key'])->delete();
                Configuration::create($value);
            }

            DB::commit();
        } catch (Exception $e) {
            throw new Exception('Exception occur '.$e);
            DB::rollBack();
        }
    }
}
