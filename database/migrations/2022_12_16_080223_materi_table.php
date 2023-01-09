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
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->string('materi_ke')->nullable(); 
            $table->unsignedBigInteger('id_list_materi')->nullable();
            $table->unsignedBigInteger('id_guru')->nullable();
            $table->string('kelas')->nullable();
            $table->string('src1')->nullable();
            $table->string('src2')->nullable();
            $table->string('src3')->nullable();
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
