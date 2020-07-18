<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    function category(){

        return $this->belongsTo("App\Category", "category_id");
    }
}
