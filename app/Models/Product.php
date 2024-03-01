<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_id', 
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

    public function getFullnameAttribute() {
        return $this->name.'-P'.time();
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

    public function image_tag($size = 'medium',
        $addAHref = true,
        $imgTagClass = null,
        $anchorTagClass = null)
    {
        return $this->imageTag($size, $addAHref, $imgTagClass, $anchorTagClass);
    }

    public function imageTag(
        $size = 'medium',
        $addAHref = true,
        $imgTagClass = null,
        $anchorTagClass = null
    ) {

        $imageUrl = e($this->imageUrl($size));
        $imageAltText = e($this->product_name);
        $imgTag = '<img src="'.$imageUrl.'" alt="'.$imageAltText.'" class="'.e($imgTagClass).'">';

        return $addAHref
            ? '<a class="'.e($anchorTagClass).'" href="'.e($this->url()).'">'.$imgTag.'</a>'
            : $imgTag;
    }

    public function imageUrl($size = 'medium'): string
    {
        $filename = $this->{'image_'.$size};
        return asset('images/products/'.$filename);
    }
}
