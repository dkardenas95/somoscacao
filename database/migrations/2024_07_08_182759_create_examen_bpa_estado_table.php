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
        Schema::create('examen_bpa_estado', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('id_user')->index('id_user')->comment('User');
            $table->string('estado');
            $table->string('secciones_insertadas');
            $table->dateTime('createdAt')->nullable()->useCurrent();
            $table->dateTime('updatedAt')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_bpa_estado');
    }
};
