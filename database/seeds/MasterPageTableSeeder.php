<?php

use Illuminate\Database\Seeder;

class MasterPagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('master_pages')->delete();
        $all = array(
            [
                'about_us',
                'About Us',
                '',
            ],
            [
                'contact_us',
                'Contact Us',
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
            DB::table('master_pages')->insert(array(
                array(
                    'page_code' => $row[0],
                    'page_title' => $row[1],
                    'page_content' => $row[2],
                )
            ));
        }
    }

}
