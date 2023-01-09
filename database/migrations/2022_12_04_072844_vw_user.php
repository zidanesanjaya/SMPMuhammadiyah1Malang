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
        DB::statement("
            CREATE VIEW vw_user AS
            (
                select `c`.`id` AS `id`,`c`.`name` AS `name`,`c`.`email` AS `email`,`c`.`role` AS `role`,`c`.`id_gelombang` AS `id_gelombang`,`c`.`nama_lengkap` AS `nama_lengkap`,`c`.`email_verified_at` AS `email_verified_at`,`c`.`password` AS `password`,`c`.`remember_token` AS `remember_token`,`c`.`created_at` AS `created_at`,`c`.`updated_at` AS `updated_at`,`d`.`nama_gelombang` AS `nama_gelombang`,`d`.`biaya` AS `biaya` from ((select `a`.`id` AS `id`,`a`.`name` AS `name`,`a`.`email` AS `email`,`a`.`role` AS `role`,`a`.`id_gelombang` AS `id_gelombang`,`a`.`nama_lengkap` AS `nama_lengkap`,`a`.`email_verified_at` AS `email_verified_at`,`a`.`password` AS `password`,`a`.`remember_token` AS `remember_token`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at` from (`users` `a` left join `detail_siswa` `b` on((`a`.`id` = `b`.`id_user`)))) `c` left join `gelombang` `d` on((`c`.`id_gelombang` = `d`.`id`)))
            );
    ");
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
