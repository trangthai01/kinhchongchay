<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'id', 
        'name', 
        'use_yn'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function projects() : BelongsToMany
    {
        return $this->belongsToMany(
            Project::class,
            'project_application',
            'application_id',
            'project_id'
        )->withPivot('image_app', 'image_app_thumbnail');
    }
}
