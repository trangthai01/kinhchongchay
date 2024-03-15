<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class ProductCategory extends Model
{
    protected $table = 'product_categories';
    protected $fillable = [
        'category_id', 
        'category_name', 
        'parent_category_id',
        'use_yn'
    ];

    protected $primaryKey = 'category_id';
    public $incrementing = false;

    public function products()
    {
        return $this->hasMany(Product::class, "category_id", "category_id");
    }

    public function children(){
        return ProductCategory::where('parent_category_id', '=', $this->category_id)->get();
    }
}
