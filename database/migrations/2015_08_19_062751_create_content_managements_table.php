<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentManagementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content_managements', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('page',100);
                        $table->string('title',100);
                        $table->text('content');
                        $table->integer('status', false)->default(1);
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
		Schema::drop('content_managements');
	}

}
