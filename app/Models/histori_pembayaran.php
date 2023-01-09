<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histori_pembayaran extends Model
{
    use HasFactory;
    protected $table = 'histori_pembayaran';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'pembayaran',
        'tanggal_pembayaran',
        'path_foto',
        'status',
        'created_date',
        'updated_date',
    ];
}
