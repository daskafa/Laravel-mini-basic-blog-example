<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data2 extends Model
{
    function getCategory(){
      return $this->hasOne('App\Models\category', 'id', 'category_id');
    }
}
