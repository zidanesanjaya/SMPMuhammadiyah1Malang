<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_orang_tua extends Model
{
    use HasFactory;
    protected $table = 'detail_orang_tua';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'keluarahan',
        'telepon_orang_tua',
        'alamat',
        'id_ayah',
        'id_ibu',
        'id_wali',
        'created_at',
        'updated_at',
    ];
}
