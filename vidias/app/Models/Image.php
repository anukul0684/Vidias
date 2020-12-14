<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'laptop_id',
        'image_name',
        'active'
    ];

    /**
     * laptop() relationship between laptops and images
     * @return id of laptop for an image
     */
    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }
}
