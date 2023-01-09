<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    use HasFactory;
    protected $table = 'wali';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'nik',
        'nama',
        'pendidikan',
        'pekerjaan',
        'tempat_lahir',
        'tanggal_lahir',
        'penghasilan',
        'created_at',
        'updated_at',
    ];
}
