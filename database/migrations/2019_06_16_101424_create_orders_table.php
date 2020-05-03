<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('order_id')->nullable();
            $table->integer('customer_id');
            $table->text('invoice_link')->nullable();
            $table->text('product_id');
            $table->text('product_name');
            $table->string('product_price');
            $table->string('total_price');
            $table->string('product_qty');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('home_address')->nullable();
            $table->string('delivery_address');
            $table->string('phone_number');
            $table->string('payment_method')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
