<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'coupon_menu');
    }
}
