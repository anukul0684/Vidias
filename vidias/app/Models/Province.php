<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_name',
        'province_gst',
        'province_pst',
        'province_hst',
        'province_qst',
        'active'
    ];

    /**
     * addresses() relationship between provinces and addresses
     * @return Collection of addresses for a province
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
