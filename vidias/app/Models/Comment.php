<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'laptop_id',
        'comment_text',
        'active'
    ];

    /**
     * laptop() relationship between laptops and comments
     * @return id of laptop for a comment
     */
    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }

    /**
     * user() relationship between users and comments
     * @return id of user for a comment
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
