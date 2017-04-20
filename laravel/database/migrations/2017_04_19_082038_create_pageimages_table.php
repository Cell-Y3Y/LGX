<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('menuclass_id');
            $table->foreign('menuclass_id')->references('id')->on('menuclasses');
            $table->text('summary')->nullable();
            $table->string('imgurl');
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
        Schema::dropIfExists('pageimages');
    }
}
