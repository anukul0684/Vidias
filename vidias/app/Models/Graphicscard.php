<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graphicscard extends Model
{
    use HasFactory;

    protected $fillable = [
        'graphicscard_name',
        'graphicscard_price',
        'active',
        'slug'             
    ];

    /**
     * laptops() relationship between graphicscards and laptops
     * @return Collection of laptops for a graphicscard
     */
    public function laptops()
    {
        return $this->hasMany(Laptop::class);
    }
}
