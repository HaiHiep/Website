<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_infos', function (Blueprint $table) {
            $table->bigIncrements('pin_id');
            $table->string('pin_width',100)->nullable();
            $table->string('pin_height',100)->nullable();
            $table->string('pin_weight',100)->nullable();
            $table->string('pin_thick',100)->nullable();
            $table->string('pin_note',500)->nullable();
            $table->string('pin_freshness_duration',100)->nullable();
            $table->string('pin_each_box_contains',100)->nullable();
            $table->integer('pin_checked')->nullable();
            $table->integer('pin_pro_id')->nullable();
            $table->dateTime('pin_created_at')->nullableTimestamps();
            $table->dateTime('pin_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('product_info');
    }
}
