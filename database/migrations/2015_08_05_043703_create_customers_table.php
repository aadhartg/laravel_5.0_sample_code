<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('customers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('user_id', 500)->comment('user_id is store\'s user id customer purchasing from');
            $table->string('email', 500);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->text('address');
            $table->string('phone',50);
            $table->integer('zip_code');
            $table->integer('country');
            $table->integer('state');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('customers');
    }

}
