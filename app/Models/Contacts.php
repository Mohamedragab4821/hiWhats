<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'product',
        'message',
        'user_id',
        
    ];

    // Optionally, define other properties or methods
}

