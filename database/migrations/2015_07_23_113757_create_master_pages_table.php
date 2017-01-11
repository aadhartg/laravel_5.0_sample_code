<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('master_pages', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('page_code',255);
                        $table->string('page_title',500);
                        $table->text('page_content');
                        $table->integer('status')->default(1);                        
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
		Schema::drop('master_pages');
	}

}
