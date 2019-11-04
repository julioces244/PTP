<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTables extends Migration
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
         $table->foreign('category_id')->references('idCategory')->on('categories');

         $table->integer('type_id')->unsigned();
         $table->foreign('type_id')->references('idType')->on('typearchives');

       });

       Schema::table('schools', function (Blueprint $table) {

         $table->integer('category_id')->unsigned();
         $table->foreign('category_id')->references('idCategory')->on('categories');

       });

       Schema::table('typeimages', function (Blueprint $table) {

         $table->integer('category_id')->unsigned();
         $table->foreign('category_id')->references('idCategory')->on('categories');

       });

       Schema::table('images', function (Blueprint $table) {

         $table->integer('typeimage_id')->unsigned();
         $table->foreign('typeimage_id')->references('idTypeimage')->on('typeimages');

         $table->integer('school_id')->unsigned();
         $table->foreign('school_id')->references('idSchool')->on('schools');

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
             $table->dropForeign('archives_category_id_foreign');
         });
         Schema::table('schools', function (Blueprint $table) {
             $table->dropForeign('schools_category_id_foreign');
         });
         Schema::table('typeimages', function (Blueprint $table) {
             $table->dropForeign('typeimages_category_id_foreign');
         });
         Schema::table('images', function (Blueprint $table) {
             $table->dropForeign('typeimages_typeimage_id_foreign');
         });

     }
}
