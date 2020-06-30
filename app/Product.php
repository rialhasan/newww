<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function cate(){
        return $this->belongsTo("App\Category", "category_id")
    }
}
