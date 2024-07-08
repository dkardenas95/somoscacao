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
        Schema::create('variedades', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('tipo_cacao');
            $table->string('total_arboles');
            $table->string('edad');
            $table->string('produccion_por_anio');
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
        Schema::dropIfExists('variedades');
    }
};
