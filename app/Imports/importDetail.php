<?php

namespace App\Imports;

use App\Models\detail_siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithStartRow;


class importDetail implements ToModel , WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct(){
        $this->i = 0;
        $this->id_user = DB::table('users')->where('role','siswa')->where('excel_import_val', date("Y_m_d_H_i"))->orderBy('id','asc')->get();
    }

    public function startRow() : int{
        return 2;
    }
    public function model(array $row)
    {
        $detail_siswa = new detail_siswa(
            [
                'id_user' => $this->id_user[$this->i]->id,
                'nama_panggilan' => $row[6],
                'telepon' => $row[4],
                'tempat_lahir' => $row[7],
                'tanggal_lahir' => $row[8],
                'jenis_kelamin' => $row[9],
                'agama' => $row[10],
                'alamat' => $row[11],
                'tinggal_dengan' => $row[12],
                'gol_darah' => $row[13],
                'cita_cita' => $row[14],
                'hobi' => $row[15],
                'jumlah_saudara' => $row[16],
                'anak_ke' => $row[17],
                'berat_badan' => $row[18],
                'bakat' => $row[19],
                'sekolah_asal' => $row[20],
            ]
        );
        $this->i++;
        return $detail_siswa;
    }
}
