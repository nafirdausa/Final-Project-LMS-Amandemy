<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_ajaran',
        'kelas_id',
        'user_id',
        'mapel_id',
        'nilai'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Kelas::class, 'mapel_id');
    }
}
