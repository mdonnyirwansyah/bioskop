<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;

    public function seats()
    {
        return $this->belongsToMany(Seat::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
