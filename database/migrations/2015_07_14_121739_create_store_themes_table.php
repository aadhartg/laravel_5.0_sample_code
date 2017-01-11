<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreThemesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store_themes', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id');
                        $table->integer('theme_id');
                        $table->string('store_theme_path');
                        $table->integer('status')->comment('0=>install,1=>publish');
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
		Schema::drop('store_themes');
	}

}
