<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ExportUser implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'ID',
            'Email',
            'Nama Lengkap',
            'Telepon Siswa',
            'Nama Panggilan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Agama',
            'Alamat',
            'Tinggal Dengan',
            'gol_darah',
            'cita_cita',
            'hobi',
            'jumlah_saudara',
            'anak_ke',
            'berat_badan',
            'bakat ', 
            'sekolah_asal',
            'provinsi',
            'kabupaten',
            'kecamatan',
            'kelurahan',
            'telepon_orang_tua',
            'alamat_orang_tua',
            'nik_ayah',
            'nama_ayah',
            'pendidikan_ayah',
            'pekerjaan_ayah',
            'tempat_lahir_ayah',
            'tanggal_lahir_ayah',
            'penghasilan_ayah',
            'nik_ibu',
            'nama_ibu',
            'pendidikan_ibu',
            'pekerjaan_ibu',
            'tempat_lahir_ibu',
            'tanggal_lahir_ibu',
            'penghasilan_ibu',
            'nik_wali',
            'nama_wali',
            'pendidikan_wali',
            'pekerjaan_wali',
            'tempat_lahir_wali',
            'tanggal_lahir_wali',
            'penghasilan_wali',
        ];
    }
    public function collection()
    {
        return DB::table('vw_export_user')->get();
    }
}
