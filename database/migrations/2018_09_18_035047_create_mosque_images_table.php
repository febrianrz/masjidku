<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mosque_images', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('file');
        //     $table->integer('id_mosque')->unsigned()->comment('ID masjid dari table mosquees');
        
        //     $table->timestamps();
        //     $table->foreign('id_mosque')->references('id')->on('mosquees');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosque_images');
    }
}
