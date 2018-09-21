<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosquees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('address');
            $table->string('phone', 15);
            $table->decimal('latitude', 5, 5);
            $table->decimal('longitude', 5, 5); // 5 angka didepan koma, 10 angka dibelakang koma
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
        Schema::dropIfExists('mosquees');
    }
}
