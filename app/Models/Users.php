<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'user_name',
        'email',
        'phone',
        'password',
        'image',
        'access'
    ];

    public $timestamps = true;

    /**
     * Get the favorites for the user.
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'user_id');
    }
}
