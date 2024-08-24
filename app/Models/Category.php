<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';


    protected $primaryKey = 'category_id';


    public $incrementing = true;


    protected $keyType = 'int';


    protected $fillable = [
        'category_name',
        'category_img',
        'category_description',
    ];


    protected $casts = [
        'category_img' => 'string',
        'category_description' => 'string',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}
