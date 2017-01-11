<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('order_items', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('order_id');
            $table->string('product_id');
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_quantity');
            $table->integer('status');
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
