<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('men_id');
            $table->string('men_name',255)->nullable();
            $table->string('men_type',255)->nullable();
            $table->string('men_link',255)->nullable();
            $table->integer('men_position')->nullable();
            $table->integer('men_parent')->nullable();
            $table->integer('men_order')->nullable();
            $table->integer('men_active')->nullable();
            $table->integer('men_root')->nullable();
            $table->dateTime('men_created_at')->nullableTimestamps();
            $table->dateTime('men_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('menus');
    }
}
