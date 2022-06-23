<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\dm_order_status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'product_id',
        'dtOrder',
        'quantity',
        'status_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function status()
    {
        return $this->hasMany(dm_order_status::class, 'id', 'status_id');
    }
}
