<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('pro_id');
            $table->string('pro_name',150);
            $table->string('pro_img',250)->nullable();
            $table->string('pro_list_img',500)->nullable();
            $table->string('pro_description',500)->nullable();
            $table->string('pro_guarantee',500)->nullable();
            $table->string('pro_color',500)->nullable();
            $table->integer('pro_category_id')->nullable();
            $table->integer('pro_active')->nullable();
            $table->integer('pro_brand')->nullable();
            $table->decimal('pro_price')->nullable();
            $table->dateTime('pro_created_at')->nullableTimestamps();
            $table->dateTime('pro_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('produdct');
    }
}
