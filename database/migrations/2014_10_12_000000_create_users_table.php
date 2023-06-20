<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->text('about')->nullable();
            $table->text('waiter_kitchenToken')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->ullable();
            $table->string('password');
            $table->string('password_reset_token',20)->nullable();
            $table->string('image',100)->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_logout')->nullable();
            $table->string('ip_address')->nullable();
            $table->integer('counter')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_admin')->default(0);
            $table->text('skeys')->nullable();
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
};
