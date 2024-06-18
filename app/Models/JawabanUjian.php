<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanUjian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tugas_id',
        'siswa_id',
        'file_jawaban',
    ];
}
