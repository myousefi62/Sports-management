<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestlav58Tables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('testlav58s', function (Blueprint $table) {

            $table->increments('id');
            $table->string( 'name') ;
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('testlav58s');
    }
}