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
        'password'
    ];

    // Optionally, set the table name if it's different
    // protected $table = 'users';

    // If necessary, define timestamps (created_at, updated_at) behavior
    public $timestamps = true;
}
