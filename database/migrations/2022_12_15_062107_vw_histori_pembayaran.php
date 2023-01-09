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
            CREATE VIEW vw_histori_pembayaran AS
            (
                SELECT
	a.*,
	b.nama_lengkap,
	c.status_pembayaran,
	c.setoran,
	c.total_pembayaran,
	c.nama_gelombang 
FROM
	histori_pembayaran AS a
	LEFT JOIN users AS b ON a.id_user = b.id
	LEFT JOIN vw_pembayaran AS c ON a.id_user = c.id_user   
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
