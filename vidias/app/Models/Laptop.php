<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'laptop_name', 
        'laptop_description',
        'brand_id',
        'graphicscard_id',
        'processor_id',
        'price',
        'ram_id',
        'touch_screen',
        'screen_resolution',
        'screen_size',
        'usb_type',
        'active',
        'price'               
    ];

    /**
     * brand() relationship between laptops and brands
     * @return id of brand for a laptop
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * processor() relationship between laptops and processors
     * @return id of processor for a laptop
     */
    public function processor()
    {
        return $this->belongsTo(Processor::class);
    }

    /**
     * graphicscard() relationship between laptops and graphicscards
     * @return id of graphicscard for a laptop
     */
    public function graphicscard()
    {
        return $this->belongsTo(Graphicscard::class);
    }

    /**
     * ram() relationship between laptops and rams
     * @return id of ram for a laptop
     */
    public function ram()
    {
        return $this->belongsTo(Ram::class);
    }

    /**
     * laptops() relationship between laptops and comments
     * @return Collection of comments for a laptop 
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    /**
     * order_details() relationship between laptops and order_details
     * @return Collection of order_details for a laptop
     */
    public function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }

    /**
     * images() relationship between laptops and images
     * @return Collection of images for a laptop
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
