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
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('edad');
            $table->string('email');
            $table->string('celular');
            $table->string('nivel_educativo');
            $table->string('enfoque_diferencial')->nullable();
            $table->string('estado_civil');
            $table->string('anios_en_region');
            $table->string('ingresos_mensuales_familia');
            $table->dateTime('createdAt')->nullable()->useCurrent();
            $table->dateTime('updatedAt')->nullable()->useCurrent();
            $table->string('token')->nullable();
            $table->dateTime('token_expiration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
