<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function room()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function patient()
    {
        return $this->belongsTo(Pasien::class);
    }

}
