<?php

namespace App\Imports;
use Hash;
use App\Models\User;
use App\Models\detail_siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithStartRow;


class ImportUser implements ToModel , WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow() : int{
        return 2;
    }
    public function model(array $row)
    {
        // echo json_encode($row);die();
        $user = new User([
            'id_gelombang' => $row[47],
            'name' => $row[0],
            'email' => $row[1],
            'role'=> $row[2],
            'nama_lengkap'=> $row[3],
            'telepon'=> $row[4],
            'password' => Hash::make($row[5]),
            'excel_import_val' => date("Y_m_d_H_i"),
        ]);
        return $user;
    }
}
