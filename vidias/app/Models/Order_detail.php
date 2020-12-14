<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'laptop_id',
        'configuration',
        'unit_price',
        'quantity',
        'line_price',
        'active',
        'order_id'
    ];

    /**
     * laptop() relationship between order_details and laptop
     * @return id of laptop for order_detail
     */
    public function laptop(){
        return $this->belongsTo(Laptop::class);
    }

     /**
     * order() relationship between order_details and order
     * @return id of order for order_detail
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
