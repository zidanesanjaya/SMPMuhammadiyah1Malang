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
        CREATE VIEW VW_EXPORT_USER AS (SELECT
            a.email,
            A.nama_lengkap,
            A.telepon ,
            b.nama_panggilan,
            b.tempat_lahir,
            b.tanggal_lahir,
            b.jenis_kelamin,
            b.agama,
            b.alamat,
            b.tinggal_dengan,
            b.gol_darah,
            b.cita_cita,
            b.hobi,
            b.jumlah_saudara,
            b.anak_ke,
            b.berat_badan,
            b.bakat , 
            b.sekolah_asal,
            f.provinsi,
            f.kabupaten,
            f.kecamatan,
            f.kelurahan,
            f.telepon_orang_tua,
            f.alamat as alamat_orang_tua,
            c.nik as nik_ayah,
            c.nama as nama_ayah,
            c.pendidikan as pendidikan_ayah,
            c.pekerjaan as pekerjaan_ayah,
            c.tempat_lahir as tempat_lahir_ayah,
            c.tanggal_lahir as tanggal_lahir_ayah,
            c.penghasilan as penghasilan_ayah,
            d.nik as nik_ibu,
            d.nama as nama_ibu,
            d.pendidikan as pendidikan_ibu,
            d.pekerjaan as pekerjaan_ibu,
            d.tempat_lahir as tempat_lahir_ibu,
            d.tanggal_lahir as tanggal_lahir_ibu,
            d.penghasilan as penghasilan_ibu,
            e.nik as nik_wali,
            e.nama as nama_wali,
            e.pendidikan as pendidikan_wali,
            e.pekerjaan as pekerjaan_wali,
            e.tempat_lahir as tempat_lahir_wali,
            e.tanggal_lahir as tanggal_lahir_wali,
            e.penghasilan as penghasilan_wali
        FROM
            USERS AS A
            LEFT JOIN detail_siswa AS b ON a.id = b.id_user 
            LEFT JOIN detail_orang_tua as f ON a.id = f.id_user
            LEFT JOIN ayah as c ON a.id = c.id_user
            LEFT JOIN ibu as d ON a.id = d.id_user
            LEFT JOIN wali as e ON a.id = e.id_user
        WHERE
            a.role = 'siswa')
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
