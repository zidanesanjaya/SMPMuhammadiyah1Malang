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
        CREATE VIEW vw_pembayaran as
        (SELECT i.id as id_user , i.nama_lengkap , i.id_gelombang , k.nama_gelombang , COALESCE(h.setoran,'0')as setoran ,k.biaya as total_pembayaran ,  COALESCE(h.status_pembayaran,'Belum Lunas') as status_pembayaran FROM users as i LEFT JOIN (
            SELECT
                g.*,
            IF
                ( g.total_pembayaran > g.setoran, 'Belum Lunas', 'Sudah Lunas' ) AS status_pembayaran 
            FROM
                (
                SELECT
                    c.id as id_user,
                    C.nama_lengkap,
                    MAX( c.id_gelombang ) AS id_gelombang,
                    MAX( d.nama_gelombang ) AS nama_gelombang,
                    SUM( a.pembayaran ) AS setoran,
                    MAX( d.biaya ) AS total_pembayaran 
                FROM
                    histori_pembayaran AS a
                    LEFT JOIN users AS c ON a.id_user = c.id
                    LEFT JOIN gelombang AS d ON c.id_gelombang = d.id 
                WHERE
                    a.STATUS = 'TERIMA' 
                GROUP BY
                c.id 
                ) AS g
            )as h ON h.id_user = i.id left join gelombang k on i.id_gelombang = k.id where i.role = 'siswa');
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
