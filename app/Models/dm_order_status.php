<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dm_order_status extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'status'
    ];
    
    public function order()
    {
        return $this->belongsToMany(Order::class, 'id', 'status_id');
    }
}
