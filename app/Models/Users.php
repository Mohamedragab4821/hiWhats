<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Favorite;

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
        // `favorites_table` هو جدول المفضلات الذي يربط بين المستخدمين والمنتجات
        return $this->belongsToMany(Favorite::class, 'favorites', 'user_id', 'product_id');
    }
}
