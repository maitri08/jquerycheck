<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table='product_sub_category';


    public function category()
	{
		return $this->belongsTo('App\Category');
	}

}
