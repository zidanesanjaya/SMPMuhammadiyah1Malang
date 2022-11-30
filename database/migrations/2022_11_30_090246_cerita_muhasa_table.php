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
        Schema::create('cerita_muhasa', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); 
            $table->string('foto');
            $table->string('deskripsi');
            $table->unsignedBigInteger('created_by'); // FK
            $table->unsignedBigInteger('updated_by'); // FK
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
