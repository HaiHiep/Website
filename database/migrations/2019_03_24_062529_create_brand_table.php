<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('bra_id');
            $table->string('bra_name',250)->nullable();
            $table->string('bra_res',250)->nullable();
            $table->string('bra_des',250)->nullable();
            $table->dateTime('bra_created_at')->nullableTimestamps();
            $table->dateTime('bra_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('brand');
    }
}
