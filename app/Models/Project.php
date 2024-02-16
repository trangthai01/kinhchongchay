<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'project_id', 
        'project_name', 
        'image',
        'image_oth_1', 
        'image_oth_2',
        'image_oth_3',
        'image_oth_4',
        'image_oth_5',
        'image_thumbnail',
        'image_oth_thumbnail_1',
        'image_oth_thumbnail_2',
        'image_oth_thumbnail_3',
        'image_oth_thumbnail_4',
        'image_oth_thumbnail_5',
        'use_yn', 
        'meta_desc', 
        'slug', 
        'created_at'
    ];

    protected $primaryKey = 'project_id';
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
                'source' => 'project_name'
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
        return asset('images/projects/'.$filename);
    }

    public function edit_url(): string
    {
        return $this->editUrl();
    }

    /**
     * Return the URL for editing the post (used for admin users).
     */
    public function editUrl(): string
    {
        return route('blogetc.admin.products.edit', $this->project_id);
    }
}
