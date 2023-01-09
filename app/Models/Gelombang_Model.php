<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelombang_Model extends Model
{
    use HasFactory;

    protected $table = 'gelombang';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_gelombang',
        'biaya',
        'mulai',
        'akhir',
        'created_date',
        'updated_date',
    ];
}
