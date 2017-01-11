<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('themes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('theme', 255);
            $table->string('theme_path', 255);
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('themes');
	}

}
