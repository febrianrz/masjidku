<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMosqueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('mosquees', function (Blueprint $table) {
        //     $table->decimal('latitude', 5, 5)->after('longitude');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mosquees', function (Blueprint $table) {
            $table->dropColumn('latitude');
        });
    }
}
