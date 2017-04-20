<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('menuclass_id');
            $table->foreign('menuclass_id')->references('id')->on('menuclasses');
            $table->unsignedInteger('articletype_id');
            $table->foreign('articletype_id')->references('id')->on('articletypes');
            $table->string('summary');
            $table->text('content');
            $table->integer('hit')->nullable()->default(0);
            $table->unsignedInteger('istop');
            $table->unsignedInteger('isfocus');
            $table->string('topimgurl')->nullable();
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('articles');
    }
}
