<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocodesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('promocodes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('name');
            $table->double('pc_percent');
            $table->double('pc_value');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('promocodes');
    }

}
