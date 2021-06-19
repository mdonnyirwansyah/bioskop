<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function theaters()
    {
        return $this->belongsToMany(Theater::class);
    }
}
