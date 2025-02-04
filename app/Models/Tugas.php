<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
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

    public function tugasSiswa()
    {
        return $this->hasMany(TugasSiswa::class);
    }
}
