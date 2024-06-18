<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
protected $fillable = ['user_id', 'title', 'body'];

public function user()
{
return $this->belongsTo(User::class);
}

public function replies()
{
return $this->hasMany(Reply::class);
}
}