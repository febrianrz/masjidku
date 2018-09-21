<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFridaySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friday_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mosque')->unsigned();
            $table->string('khatib',100);
            $table->string('imam', 100);
            $table->string('muadzin',100);
            $table->date('date')->nullable();
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')
                ->on('mosquees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friday_schedules');
    }
}
