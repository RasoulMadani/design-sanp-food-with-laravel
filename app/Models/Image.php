<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function ghazas()
    {
        return $this->morphedByMany(Ghaza::class, 'imagezable');
    }

    public function restaurants()
    {
        return $this->morphedByMany(Restaurant::class, 'imagezable');
    }
}
