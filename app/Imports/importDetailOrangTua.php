<?php

namespace App\Imports;

use App\Models\detail_orang_tua;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithStartRow;

class importDetailOrangTua implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct(){
        $this->j = 0;
        $this->id_user1 = DB::table('users')->where('role','siswa')->where('excel_import_val', date("Y_m_d_H_i"))->orderBy('id','asc')->get();
    }

    public function startRow() : int{
        return 2;
    }
    public function model(array $row)
    {
        $detail_orang_tua = new detail_orang_tua(
            [
                'id_user' => $this->id_user1[$this->j]->id,
                'provinsi' => $row[21],
                'kabupaten' => $row[22],
                'kecamatan' => $row[23],
                'kelurahan' => $row[24],
                'telepon_orang_tua' => $row[25],
                'alamat' => $row[11],
            ]
        );
        $this->j++;
        return $detail_orang_tua;
    }
}
