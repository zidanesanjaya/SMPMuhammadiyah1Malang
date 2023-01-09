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
        CREATE VIEW vw_detail_siswa AS
        (
            SELECT
                I.*,
                j.nik AS nik_wali,
                j.nama AS nama_wali,
                j.pendidikan AS pendidikan_wali,
                j.pekerjaan AS pekerjaan_wali,
                j.tempat_lahir AS tempat_lahir_wali,
                j.tanggal_lahir AS tanggal_lahir_wali,
                j.penghasilan AS penghasilan_wali 
            FROM
                (
                SELECT
                    G.*,
                    H.nik AS nik_ibu,
                    h.nama AS nama_ibu,
                    h.pendidikan AS pendidikan_ibu,
                    h.pekerjaan AS pekerjaan_ibu,
                    h.tempat_lahir AS tempat_lahir_ibu,
                    h.tanggal_lahir AS tanggal_lahir_ibu,
                    h.penghasilan AS penghasilan_ibu 
                FROM
                    (
                    SELECT
                        E.*,
                        F.nik AS nik_ayah,
                        F.nama AS nama_ayah,
                        F.pendidikan AS pendidikan_ayah,
                        F.pekerjaan AS pekerjaan_ayah,
                        F.tempat_lahir AS tempat_lahir_ayah,
                        F.tanggal_lahir AS tanggal_lahir_ayah,
                        F.penghasilan AS penghasilan_ayah 
                    FROM
                        (
                        SELECT
                            C.*,
                            d.provinsi,
                            d.kabupaten,
                            d.kecamatan,
                            d.kelurahan,
                            d.telepon_orang_tua,
                            d.alamat 
                        FROM
                            (
                            SELECT
                                A.*,
                                B.nama_panggilan,
                                B.tempat_lahir AS tempat_lahir_siswa,
                                B.tanggal_lahir AS tanggal_lahir_siswa,
                                B.jenis_kelamin,
                                B.agama,
                                B.alamat AS alamat_siswa,
                                B.tinggal_dengan,
                                B.gol_darah,
                                B.cita_cita,
                                B.hobi,
                                B.jumlah_saudara,
                                B.anak_ke,
                                B.berat_badan,
                                B.bakat,
                                B.sekolah_asal 
                            FROM
                                USERS AS A
                                LEFT JOIN DETAIL_SISWA AS B ON A.id = B.id_user 
                            ) AS C
                            LEFT JOIN DETAIL_ORANG_TUA AS D ON C.id = D.id_user 
                        ) AS E
                        LEFT JOIN AYAH F ON E.id = F.id_user 
                    ) AS G
                    LEFT JOIN IBU H ON G.id = H.id_user 
                ) AS I
                LEFT JOIN wali j ON i.id = j.id_user
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
