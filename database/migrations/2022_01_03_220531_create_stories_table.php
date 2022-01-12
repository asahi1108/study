<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('univ');
            $table->string('facu');
            $table->integer('year');
            $table->integer('pref');
            $table->string('school_name');
            $table->integer('1stexam');
            $table->integer('2ndexam');
            $table->text('way');
            $table->text('univlife');
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
        Schema::dropIfExists('stories');
    }
}
