<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussion extends Model
{
use HasFactory, SoftDeletes;

protected $fillable = [
'title', 'body', 'user_id'
];

public function user()
{
return $this->belongsTo(User::class);
}

public function replies()
{
return $this->hasMany(Reply::class);
}
}
