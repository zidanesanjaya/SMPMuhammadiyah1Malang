<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'total_pembayaran',
        'setoran_masuk',
        'status_pembayaran',
        'created_date',
        'updated_date',
    ];
}
