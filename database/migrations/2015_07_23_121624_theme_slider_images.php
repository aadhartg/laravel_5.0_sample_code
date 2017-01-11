<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemeSliderImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('theme_slider_images', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('design_settings_id');
                $table->string('image_path', 255);
                $table->string('image_name', 255);
                $table->integer('status')->default('1');
                
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
