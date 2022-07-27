<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
    ];
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    // public function cartMenus()
    // {
    //     return $this->hasManyThrough(Menu::class, CartItem::class,'cart_id','');
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        // return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
        return $this->morphMany(Comment::class, 'commentable');
    }
}
