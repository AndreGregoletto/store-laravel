<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'barCode',
        'price'
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class, 'id', 'product_id');
    }
}
