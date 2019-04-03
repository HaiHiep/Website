<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('cat_id');
            $table->string('cat_name',250)->nullable();
            $table->string('cat_alias',250)->nullable();
            $table->string('cat_seo_text',250)->nullable();
            $table->string('cat_picture',250)->nullable();
            $table->string('cat_description',250)->nullable();
            $table->string('cat_type',250)->nullable();
            $table->string('cat_slug',250)->nullable();
            $table->integer('cat_active')->nullable();
            $table->integer('cat_parent_id')->nullable();
            $table->integer('cat_has_child')->nullable();
            $table->integer('cat_hot')->nullable();
            $table->integer('cat_new')->nullable();
            $table->integer('cat_root')->nullable();
            $table->dateTime('cat_created_at')->nullableTimestamps();
            $table->dateTime('cat_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('category');
    }
}
