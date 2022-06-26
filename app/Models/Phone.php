<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->morphedByMany(User::class, 'phonizable');
    }

    public function restaurants()
    {
        return $this->morphedByMany(Restaurant::class, 'phonizable');
    }
}
