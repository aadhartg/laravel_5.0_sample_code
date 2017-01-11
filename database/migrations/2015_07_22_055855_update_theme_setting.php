<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateThemeSetting extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('design_settings', function(Blueprint $table) {
            $table->integer('theme_id')->after('user_id')->nullable();
            $table->string('theme_type', 255)->after('theme_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
