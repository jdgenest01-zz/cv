<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('Connaissance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('noy');
            $table->longText('desc');
            $table->string('link');
            $table->string('logo');
            $table->timestamps();
        });

        Schema::create('Experience', function (Blueprint $table) {
          $table->increments('id');
          $table->dateTime('start');
          $table->dateTime('end');
          $table->string('institution');
          $table->string('title');
          $table->longText('desc');
          $table->string('logo');
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
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('Experience');
        Schema::dropIfExists('Connaissance');
    }
}
