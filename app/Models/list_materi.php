<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_materi extends Model
{
    use HasFactory;
    protected $table = 'list_materi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_materi',
        'created_at',
        'updated_at',
    ];
}
