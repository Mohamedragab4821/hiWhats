<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'website_name',
        'website_description',
        'logo',
        'icon',
        'home_meta_k',
        'home_meta_d',
        'product_meta_k',
        'product_meta_d',
        'category_meta_k',
        'category_meta_c',
        'facebook_url',
        'twitter_url',
        'insta_url',
        'youtube_url',
        'home_description1',
        'home_description1'
    ];

    // Optionally, define other properties or methods
}

