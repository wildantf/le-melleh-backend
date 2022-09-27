<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_category_id',
        'name',
        'price',
        'description',
        'tags'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

}
