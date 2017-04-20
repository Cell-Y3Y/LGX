<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloadfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->string('fileurl');
            $table->integer('hit')->nullable()->default(0);
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
        Schema::dropIfExists('downloadfiles');
    }
}
