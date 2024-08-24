<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural form of the model name
    protected $table = 'product';  // Assuming your table is named 'products'

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'product_name',
        'category_id',
        'category_name',
        'product_salary',
        'description',
        'Duration_of_righteousness',
        'Product_img'
    ];

    // Optionally, if you want to disable timestamps (created_at, updated_at):
    public $timestamps = false;
}
