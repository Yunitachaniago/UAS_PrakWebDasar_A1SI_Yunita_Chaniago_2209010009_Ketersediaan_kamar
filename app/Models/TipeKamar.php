<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    public function rooms()
    {
        return $this->hasMany(Kamar::class);
    }
}
