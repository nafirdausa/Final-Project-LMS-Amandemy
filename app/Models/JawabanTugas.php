<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanTugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'tugas_id',
        'siswa_id',
        'file_jawaban',
    ];
}
