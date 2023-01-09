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
        Schema::create('informasi_lainya', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(); 
            $table->text('lainya')->nullable();
            $table->text('var1')->nullable();
            $table->text('var2')->nullable();
            $table->text('var3')->nullable();
            $table->text('var4')->nullable();
            $table->date('var5')->nullable();

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
