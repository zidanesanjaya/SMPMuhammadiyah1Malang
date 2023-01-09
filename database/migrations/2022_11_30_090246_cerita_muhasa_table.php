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
            $table->text('deskripsi');
            $table->string('created_by')->nullable(); // FK
            $table->string('updated_by')->nullable(); // FK
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
