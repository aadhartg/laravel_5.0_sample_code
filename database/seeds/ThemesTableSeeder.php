<?php

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('themes')->delete();
        $all = array(
            ['quicktheme', 'default.png', 'themes/default', 'default'],
            ['theme-1', 'theme-1.jpg', 'themes/theme-1', 'live'],
            ['theme-2', 'theme-2.jpg', 'themes/theme-2', 'live'],
            ['theme-3', 'theme-3.jpg', 'themes/theme-3', 'live'],
            ['theme-4', 'theme-4.jpg', 'themes/theme-4', 'live'],
        );
        foreach ($all as $them) {
            DB::table('themes')->insert(array(
                array(
                    'theme' => $them[0],
                    'theme_image' => $them[1],
                    'theme_path' => $them[2],
                    'theme_type' => $them[3],
                )
            ));
        }
    }

}
