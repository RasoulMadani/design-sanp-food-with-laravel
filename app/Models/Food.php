<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function images()
    {
        return $this->morphToMany(Image::class, 'imagezable');
    }
}
