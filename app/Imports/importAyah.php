<?php

namespace App\Imports;

use App\Models\ayah;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithStartRow;

class importAyah implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct(){
        $this->k = 0;
        $this->id_user2 = DB::table('users')->where('role','siswa')->where('excel_import_val', date("Y_m_d_H_i"))->orderBy('id','asc')->get();
    }

    public function startRow() : int{
        return 2;
    }
    public function model(array $row)
    {
        $ayah = new ayah(
            [
                'id_user' => $this->id_user2[$this->k]->id,
                'nik' => $row[26],
                'nama' => $row[27],
                'pendidikan' => $row[28],
                'pekerjaan' => $row[29],
                'tempat_lahir' => $row[30],
                'tanggal_lahir' => $row[31],
                'penghasilan' => $row[32],
            ]
        );
        $this->k++;
        return $ayah;
    }
}
