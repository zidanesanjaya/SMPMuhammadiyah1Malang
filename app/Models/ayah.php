<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ayah extends Model
{
    use HasFactory;
    protected $table = 'ayah';
    protected $primaryKey = 'id';

    protected $fillable = [
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
