<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'user_image',
        'mobile_number',
        'email',
        'active',
        'password',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * comments() relationship between users and comments
     * @return Collection of comments for an user
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    /**
     * orders() relationship between users and orders
     * @return Collection of orders for an user
     */
    public function orders(){
        return $this->hasMany(Order::class);
    }

    /**
     * addresses() relationship between users and addresses
     * @return Collection of addresses for an user
     */
    public function addresses(){
        return $this->hasMany(Address::class);
    }


}
