<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archives', function (Blueprint $table) {

          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('idCategory')->on('CATEGORIES');

          $table->integer('type_id')->unsigned();
          $table->foreign('type_id')->references('idType')->on('TYPEARCHIVES');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archives', function (Blueprint $table) {
            //
            $table->dropForeign('archives_category_id_foreign');
        });
    }
}
