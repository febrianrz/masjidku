<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            
            
            
            $table->increments('id');
            $table->integer('id_mosque')->unsigned();
            $table->integer('id_finance_type')->unsigned();
            $table->integer('amount')->unsigned()->default(0);
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')
                ->on('mosquees');
            $table->foreign('id_finance_type')->references('id')
                ->on('finance_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
