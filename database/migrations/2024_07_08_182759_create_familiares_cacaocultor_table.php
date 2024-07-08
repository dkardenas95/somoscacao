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
        Schema::create('familiares_cacaocultor', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('nombre');
            $table->string('parentesco');
            $table->string('edad');
            $table->string('nivel_educativo');
            $table->unsignedMediumInteger('id_user')->index('id_user')->comment('User');
            $table->dateTime('createdAt')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiares_cacaocultor');
    }
};
