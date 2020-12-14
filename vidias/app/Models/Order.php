<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipped_date',
        'order_billing_address',
        'order_shipping_address',
        'email',
        'mobile_number',
        'subtotal',
        'gst',
        'pst',
        'hst',
        'qst',
        'total',
        'card_number',
        'payment_status',
        'transaction_id',
        'active',
        'shipped'
    ];

    /**
     * user() relationship between order and users
     * @return id of user for an order
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * transaction() relationship between order and users
     * @return id of user for an order
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * order_details() relationship between orders and order_details
     * @return Collection of order_details for an order
     */
    public function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }
    
}
