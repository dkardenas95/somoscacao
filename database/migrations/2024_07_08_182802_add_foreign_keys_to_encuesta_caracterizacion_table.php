<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('encuesta_caracterizacion', function (Blueprint $table) {
            $table->foreign(['id_user'], 'encuesta_caracterizacion_ibfk_1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('encuesta_caracterizacion', function (Blueprint $table) {
            $table->dropForeign('encuesta_caracterizacion_ibfk_1');
        });
    }
};
