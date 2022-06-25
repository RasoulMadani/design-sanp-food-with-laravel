<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function foods()
    {
        return $this->morphedByMany(Food::class, 'categorizable');
    }

    public function restaurants()
    {
        return $this->morphedByMany(Restaurant::class, 'categorizable');
    }
}
