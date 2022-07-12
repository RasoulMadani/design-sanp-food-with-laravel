<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghaza extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'ingredient',
        'price',
    ];
    protected $table = 'ghazas';
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function images()
    {
        return $this->morphToMany(Image::class, 'imagezable');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
