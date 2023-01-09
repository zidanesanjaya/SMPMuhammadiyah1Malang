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
        CREATE VIEW VW_PEMBELAJARAN as (SELECT
        a.*,
        b.nama_materi,
        c.nama_guru 
        FROM
        materi AS a
        LEFT JOIN list_materi AS b ON a.id_list_materi = b.id
        LEFT JOIN guru as c ON a.id_guru = c.id);
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
