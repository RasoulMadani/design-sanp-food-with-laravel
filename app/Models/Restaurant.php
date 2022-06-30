<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function images()
    {
        return $this->morphToMany(Image::class, 'imagezable');
    }
    public function addresses()
    {
        return $this->morphToMany(Address::class, 'addressezable');
    }
    public function phones()
    {
        return $this->morphToMany(Phone::class, 'phonizable');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
