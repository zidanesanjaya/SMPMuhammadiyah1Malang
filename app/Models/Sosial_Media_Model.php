<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosial_Media_Model extends Model
{
    use HasFactory;

    protected $table = 'sosial_media';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'deskripsi',
        'link',
        'logo',
        'status',
        'created_date',
        'updated_date',
    ];
}
