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
        Schema::create('types_table', function (Blueprint $table) {
            $table->id();
            $table->string('type_input');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('foto');
            $table->string('var1');
            $table->string('var2');
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