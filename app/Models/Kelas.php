<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_mapel',
        'nama_kelas',
        'tahun_ajaran',
        'nama_pengajar',
    ];
}
