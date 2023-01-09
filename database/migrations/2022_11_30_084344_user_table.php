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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('nama_lengkap')->nullable();
            $table->string('path_foto')->nullable();
            $table->string('telepon')->nullable();
            $table->unsignedBigInteger('id_gelombang')->nullable();//FK
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('excel_import_val')->nullable();
            $table->rememberToken();
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
        
    }
};
