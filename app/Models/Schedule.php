<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
