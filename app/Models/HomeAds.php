<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAds extends Model
{
    protected $table = 'home_ads';

    protected $fillable = [
        'image',
        'description',
        'end_date',
        'button_url',

        
    ];

    // Optionally, define other properties or methods
}

