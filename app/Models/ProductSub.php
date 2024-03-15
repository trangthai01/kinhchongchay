<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ProductSub extends Model
{
    protected $table = 'product_subs';
    protected $fillable = [
        'product_sub_id', 
        'product_id', 
        'product_sub_name', 
        'use_yn', 
        'created_at',
        'updated_at'
    ];
}
