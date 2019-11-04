<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('idArchive');
          //$table->unsignedInteger('idCategory')->nullnable(false);
          //$table->foreign('idCategory')->references('idCategory')->on('category')->nullnable(false);

          //
          $table->string('filename')->nullable();
          $table->string('archive')->nullable();
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
        Schema::dropIfExists('archives');
    }
}
