<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('author_name');
            $table->string('body');

            $table->integer("school_id")->unsigned();
            $table->foreign('school_id')->references('id')->on('schools');
            $table->integer("bbs_id")->unsigned();
            $table->foreign('bbs_id')->references('id')->on('bbs');

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
        Schema::dropIfExists('comments');
    }
}
