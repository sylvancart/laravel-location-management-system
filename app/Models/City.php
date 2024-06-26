<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'state_id', 'user_id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function pincodes()
    {
        return $this->hasMany(Pincode::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
