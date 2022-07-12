<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function ghazas()
    {
        return $this->belongsTo(Ghaza::class);
    }
    public function resaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_menu');
    }
}
