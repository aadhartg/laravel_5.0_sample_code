<?php

use Illuminate\Database\Seeder;

class ContentManagementsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('content_managements')->delete();
        $all = array(
            [
                'about_us',
                'About Us',
                '',
            ],
            [
                'features',
                'Features',
                '',
            ],
            [
                'term_condition',
                'Terms & Conditions',
                '',
            ],
            [
                'privacy_policy',
                'Privacy Policy',
                '',
            ],
        );
        foreach ($all as $row) {
            DB::table('content_managements')->insert(array(
                array(
                    'page' => $row[0],
                    'title' => $row[1],
                    'content' => $row[2],
                )
            ));
        }
    }

}
