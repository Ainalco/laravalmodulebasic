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
        Schema::create('customer_info', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('cuntomer_no');
            $table->integer('membership_typeme')->nullable()->comment('1=bronze,2=silver,3=gold,4=platinum,5vip	');;
            $table->string('customer_name', 100);
            $table->string('customer_email',100);
            $table->string('password')->nullable();
            $table->text('customer_token')->nullable();
            $table->text('customer_address')->nullable();
            $table->string('customer_phone',25);
            $table->string('customer_picture')->nullable();
            $table->text('favorite_delivery_address')->nullable();
            $table->string('otpcode',10)->nullable();
            $table->date('crdate')->nullable();
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('customer_info');
    }
};
