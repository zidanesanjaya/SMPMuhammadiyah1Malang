<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'materi_ke',
        'id_list_materi',
        'id_guru',
        'kelas',
        'src1',
        'src2',
        'src3',
        'created_at',
        'updated_at',
    ];
}
