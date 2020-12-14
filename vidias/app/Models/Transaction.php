<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'response',       
        'auth_code',
        'trans_id',
        'ref_number',
        'active'
    ];

    /**
     * order() relationship between order and users
     * @return id of user for an order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
