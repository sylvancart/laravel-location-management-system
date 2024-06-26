<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'status'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
