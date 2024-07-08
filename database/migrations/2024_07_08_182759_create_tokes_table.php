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
        Schema::create('tokes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedMediumInteger('user_id')->nullable()->index('FK_tokes_users');
            $table->string('token')->nullable();
            $table->timestamp('espires_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokes');
    }
};
