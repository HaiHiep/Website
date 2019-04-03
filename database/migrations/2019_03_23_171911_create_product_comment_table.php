<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_comments', function (Blueprint $table) {
            $table->bigIncrements('pco_id');
            $table->integer('pco_product_id')->nullable();
            $table->integer('pco_user_id')->nullable();
            $table->integer('pco_status')->nullable();
            $table->integer('pco_active')->nullable();
            $table->integer('pco_like')->nullable();
            $table->string('pco_content')->nullable();
            $table->dateTime('pco_created_at')->nullableTimestamps();
            $table->dateTime('pco_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('product_comment');
    }
}
