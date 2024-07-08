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
        Schema::table('caracterizacion_futuro_cacaocultor', function (Blueprint $table) {
            $table->foreign(['id_user'], 'caracterizacion_futuro_cacaocultor_ibfk_1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caracterizacion_futuro_cacaocultor', function (Blueprint $table) {
            $table->dropForeign('caracterizacion_futuro_cacaocultor_ibfk_1');
        });
    }
};
