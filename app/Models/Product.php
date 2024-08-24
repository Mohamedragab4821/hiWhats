<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'product_name',
        'category_id',
        'category_name',
        'product_salary',
        'description',
        'Duration_of_righteousness',
        'Product_img',
    ];
}
