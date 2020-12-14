<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    protected $fillable = [
        'processor_name',         
        'processor_price',
        'active',
        'slug'               
    ];

    /**
     * laptops() relationship between processors and laptops
     * @return Collection of laptops for a processor
     */
    public function laptops()
    {
        return $this->hasMany(Laptop::class);
    }
}
