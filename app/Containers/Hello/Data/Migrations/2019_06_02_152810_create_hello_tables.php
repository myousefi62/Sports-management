<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHelloTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hellos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('Massage');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('hellos');
    }
}
