<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->morphedByMany(User::class, 'addressezable');
    }

    public function restaurants()
    {
        return $this->morphedByMany(Restaurant::class, 'addressezable');
    }
}
