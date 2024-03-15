<?php

namespace App\Models;

use App\Models\ProductSub;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_id', 
        'category_id', 
        'product_name', 
        'image',
        'use_yn', 
        'meta_desc', 
        'slug', 
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'product_id';
    public $incrementing = false;

    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function subs() 
    {
        return $this->hasMany(ProductSub::class, 'product_id', 'product_id');
    }
}
