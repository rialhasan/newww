<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $casts = [
        'category_id' => 'integer',
        'subcategory_id' => 'integer',
    ];
    function cate(){
        return $this->belongsTo("App\Category", "category_id");
    }
}
