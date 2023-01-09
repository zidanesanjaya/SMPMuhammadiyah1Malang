<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi_lainya extends Model
{
    use HasFactory;
    protected $table = 'informasi_lainya';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type',
        'lainya',
        'var1',
        'var2',
        'created_at',
        'updated_at',
    ];
}
