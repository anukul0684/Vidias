<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',       
        'active',
        'slug'          
    ];

    /**
     * laptops() relationship between brands and laptops
     * @return Collection of laptops for a brand
     */
    public function laptops()
    {
        return $this->hasMany(Laptop::class);
    }
}
