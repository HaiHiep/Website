<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('car_id');
            $table->integer('car_user_id')->nullable();
            $table->integer('car_status')->nullable();
            $table->string('car_list_product_quantity',500)->nullable();
            $table->dateTime('car_created_at')->nullableTimestamps();
            $table->dateTime('car_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('cart');
    }
}
