<?php

namespace App\Imports;

use App\Models\wali;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithStartRow;

class importWali implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct(){
        $this->m = 0;
        $this->id_user4 = DB::table('users')->where('role','siswa')->where('excel_import_val', date("Y_m_d_H_i"))->orderBy('id','asc')->get();
    }

    public function startRow() : int{
        return 2;
    }
    public function model(array $row)
    {
        $wali = new wali(
            [
                'id_user' => $this->id_user4[$this->m]->id,
                'nik' => $row[40],
                'nama' => $row[41],
                'pendidikan' => $row[42],
                'pekerjaan' => $row[43],
                'tempat_lahir' => $row[44],
                'tanggal_lahir' => $row[45],
                'penghasilan' => $row[46],
            ]
        );
        $this->m++;
        return $wali;
    }
}
