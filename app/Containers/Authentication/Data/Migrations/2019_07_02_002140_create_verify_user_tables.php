<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVerifyUserTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('verify_user', function (Blueprint $table) {

            $table->increments('id')->unique()->comment('شناسه جدول');
            $table->integer('user_id')->nullable()->comment('شناسه کاربر');
            $table->integer('signin_id')->nullable()->comment('شناسه توکن');
            $table->string('phone_number')->nullable()->comment('شماره تلفن قابل حذف');
            $table->integer('verify_code')->nullable()->comment('کد تایید');
            $table->integer('status_id')->nullable()->comment('وضعیت درخواست');
            $table->timestamp('exp_date')->nullable()->comment('تاریخ انقضای کد');
            $table->ipAddress('ip')->nullable()->comment('ای پی کاربر');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('verify_user');
    }
}
