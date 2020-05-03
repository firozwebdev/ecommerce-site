<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('product_name');
            $table->string('product_title');
            $table->string('sub_category_id');
            $table->string('slug');
            $table->integer('product_price');
            $table->integer('special_price')->nullable();
            $table->integer('discount')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('product_quantity');
            $table->string('sku');
            $table->string('stock');
            $table->text('multiple');
            $table->text('description');
            $table->text('color')->nullable();
            $table->text('size')->nullable();
            $table->text('video_link')->nullable();
            $table->string('warrantly')->nullable();
            $table->tinyInteger('status');
            $table->bigInteger('total_order')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
