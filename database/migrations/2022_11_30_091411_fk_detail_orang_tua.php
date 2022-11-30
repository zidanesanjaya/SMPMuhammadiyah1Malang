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
        Schema::table('detail_orang_tua', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('id_ayah')->references('id')->on('ayah')->onDelete('cascade');;
            $table->foreign('id_ibu')->references('id')->on('ibu')->onDelete('cascade');;
            $table->foreign('id_wali')->references('id')->on('wali')->onDelete('cascade');;
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
