<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
             $table->string('email', 100)->unique();
             $table->text('home_address')->nullable();;
             $table->text('delivery_address')->nullable();;
             $table->Integer('phone_number')->nullable();;
             $table->text('total_ordres')->nullable();
             $table->text('image')->nullable();
             $table->string('password');
             $table->softDeletes();
             $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
