<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_guru_honorer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pos',
        'nama',
        'alamat',
        'tempat_lahir',
        'tgl_lahir',
        'no_hp',
        'jkl',
        'agama',
        'status',
    ];
}
