<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    public $table = 'certifications';
    public $fillable = ['name', 'meta_desc', 'image', 'image_thumbnail'];
}
