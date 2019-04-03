<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_ratings', function (Blueprint $table) {
            $table->bigIncrements('pra_id');
            $table->integer('pra_product_id')->nullable();
            $table->integer('pra_count_rate')->nullable();
            $table->integer('pra_count_star')->nullable();
            $table->decimal('pra_avg',8,2)->nullable();
            $table->decimal('pra_total_point',8,2)->nullable();
            $table->dateTime('pra_created_at')->nullableTimestamps();
            $table->dateTime('pra_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('product_rating');
    }
}
