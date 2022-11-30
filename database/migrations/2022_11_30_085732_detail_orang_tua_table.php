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
        Schema::create('detail_orang_tua', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user'); //FK
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('telepon_orang_tua');
            $table->string('alamat');
            $table->unsignedBigInteger('id_ayah'); // FK
            $table->unsignedBigInteger('id_ibu'); // FK
            $table->unsignedBigInteger('id_wali'); // FK
            $table->timestamps();
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
