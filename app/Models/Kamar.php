<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class);
    }
}
