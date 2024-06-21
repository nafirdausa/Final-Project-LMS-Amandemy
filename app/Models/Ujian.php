<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'kelas_id',
        'judul',
        'deskripsi',
        'deadline',
        'time',
        'file',
    ];

    public function ujianSiswa()
    {
        return $this->hasMany(UjianSiswa::class);
    }
}
