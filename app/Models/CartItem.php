<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id', 'menu_id', 'quantity', 'unit_price'
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
