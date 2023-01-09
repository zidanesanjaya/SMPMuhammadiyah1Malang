<?php

namespace App\Imports;

use App\Models\ibu;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithStartRow;

class importIbu implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct(){
        $this->l = 0;
        $this->id_user3 = DB::table('users')->where('role','siswa')->where('excel_import_val', date("Y_m_d_H_i"))->orderBy('id','asc')->get();
    }

    public function startRow() : int{
        return 2;
    }
    public function model(array $row)
    {
        $ibu = new ibu(
            [
                'id_user' => $this->id_user3[$this->l]->id,
                'nik' => $row[33],
                'nama' => $row[34],
                'pendidikan' => $row[35],
                'pekerjaan' => $row[36],
                'tempat_lahir' => $row[37],
                'tanggal_lahir' => $row[38],
                'penghasilan' => $row[39],
            ]
        );
        $this->l++;
        return $ibu;
    }
}
