<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('type');
            $table->string('value');
            $table->string('shiping');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('product');
            $table->string('category');
            $table->string('coupons_limit');
            $table->string('customer_limit');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('coupons');
    }
}
