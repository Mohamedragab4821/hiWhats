<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'product_id'; // Set this to your primary key field name
    public $incrementing = false;
    // Define the table name if it's different from the plural form of the model name

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

    public $timestamps = false;

    /**
     * Get the favorites for the product.
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'product_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
