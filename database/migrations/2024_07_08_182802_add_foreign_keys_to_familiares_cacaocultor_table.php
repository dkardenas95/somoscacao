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
        Schema::table('familiares_cacaocultor', function (Blueprint $table) {
            $table->foreign(['id_user'], 'familiares_cacaocultor_ibfk_1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('familiares_cacaocultor', function (Blueprint $table) {
            $table->dropForeign('familiares_cacaocultor_ibfk_1');
        });
    }
};
