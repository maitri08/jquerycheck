<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='product_category';

  public function parent()
    {
        return $this->belongsTo('App\Product', 'parent_id');
    }

}
