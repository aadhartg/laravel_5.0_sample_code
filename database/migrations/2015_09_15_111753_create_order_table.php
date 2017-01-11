<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->string('order_number');
            $table->string('actual_amount');
            $table->string('promocode_amount');
            $table->string('payable_amount');
            $table->integer('order_status')->comment('pending,shipped,cancel,complete');
            $table->timestamps();
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
