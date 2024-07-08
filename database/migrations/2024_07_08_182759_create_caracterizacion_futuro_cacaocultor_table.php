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
        Schema::create('caracterizacion_futuro_cacaocultor', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('rentabilidad_baja_cacao')->nullable();
            $table->string('precios_inestables')->nullable();
            $table->string('actividad_sacrificada')->nullable();
            $table->string('beneficio_para_intermediarios')->nullable();
            $table->string('diversificacion_ingresos')->nullable();
            $table->string('crear_negocio_propio')->nullable();
            $table->string('no_conocimiento_otras_areas')->nullable();
            $table->unsignedMediumInteger('id_user')->index('id_user')->comment('User');
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
        Schema::dropIfExists('caracterizacion_futuro_cacaocultor');
    }
};
