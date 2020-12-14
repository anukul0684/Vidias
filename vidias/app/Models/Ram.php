<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $fillable = [
        'ram_size',
        'ram_price',         
        'active',
        'slug'              
    ];

    /**
     * laptops() relationship between rams and laptops
     * @return Collection of laptops for a ram
     */
    public function laptops()
    {
        return $this->hasMany(Laptop::class);
    }
}
