<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSigninTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('signins', function (Blueprint $table) {

            $table->increments('id')->unique()->comment('شناسه لاگین');
            $table->integer('user_id')->nullable()->comment('شناسه کاربر');
            $table->boolean('is_active')->nullable()->comment('وضعیت توکین');
            $table->uuid('uuid')->nullable()->comment('شناسه سخت افزاری سیستم');
            $table->macAddress('mac_address')->nullable()->comment('شناسه مک سیستم');
            $table->ipAddress('ip')->nullable()->comment('ای پی کاربر');
            $table->string('platform')->nullable()->comment('نام سیستم عامل');
            $table->string('user_agent')->nullable()->comment('ایجنت ');
            $table->string('public_key')->nullable()->comment('کلید عمومی کاربر');
            $table->string('token_type')->nullable()->comment('نوع توکن موقت یا اصلی');
            $table->string('device')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('signins');
    }
}
