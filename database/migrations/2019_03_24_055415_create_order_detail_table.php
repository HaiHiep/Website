<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('ordet_id');
            $table->integer('ordet_order_id')->nullable();
            $table->integer('ordet_product_id')->nullable();
            $table->integer('ordet_quantity')->nullable();
            $table->integer('ordet_status')->nullable();
            $table->string('ordet_note',500)->nullable();
            $table->dateTime('ordet_created_at')->nullableTimestamps();
            $table->dateTime('ordet_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('order_detail');
    }
}
