<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('con_id');
            $table->string('con_address',250)->nullable();
            $table->string('con_phone',250)->nullable();
            $table->string('con_mail',250)->nullable();
            $table->string('con_face',250)->nullable();
            $table->string('con_des',250)->nullable();
            $table->dateTime('con_created_at')->nullableTimestamps();
            $table->dateTime('con_updated_at')->nullableTimestamps();
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
        Schema::dropIfExists('contact');
    }
}
