<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('use_id');
            $table->string('use_name');
            $table->string('use_email')->unique();
            $table->timestamp('use_email_verified_at')->nullable();
            $table->string('use_password');
            $table->string('use_phone')->nullable();
            $table->integer('use_active')->nullable();
            $table->integer('use_gender')->nullable();
            $table->integer('use_role')->nullable();
            $table->dateTime('use_created_at')->nullableTimestamps();
            $table->dateTime('use_updated_at')->nullableTimestamps();
            $table->string('use_avatar')->nullable();
            $table->string('use_facebook')->nullable();
            $table->dateTime('use_birthday')->nullableTimestamps();
            $table->string('use_address')->nullable();
            $table->string('use_shop_address')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
