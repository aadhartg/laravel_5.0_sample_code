<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transactions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('order_id');
            $table->string('txn_id');
            $table->string('txn_type');
            $table->string('mc_gross');
            $table->string('payment_gross');
            $table->string('payment_type');
            $table->string('payment_status');
            $table->string('payment_date');
            $table->string('payer_id');
            $table->string('payer_email');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address_street');
            $table->text('address_name');
            $table->string('address_country');
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_zip');
            $table->string('address_country_code');
            $table->string('quantity');
            $table->string('receiver_id');
            $table->string('item_name');
            $table->string('item_number');
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
