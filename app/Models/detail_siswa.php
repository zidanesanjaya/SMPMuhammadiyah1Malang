<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_siswa extends Model
{
    protected $table = 'detail_siswa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'tinggal_dengan',
        'gol_darah',
        'cita_cita',
        'hobi',
        'jumlah_saudara',
        'anak_ke',
        'berat_badan',
        'bakat',
        'sekolah_asal',
        'created_at',
        'updated_at',
    ];
}
