<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';

    //   public function category()
    // {
    //     return $this->belongsTo('App\Category');
    // }

    public function children()
	{
		return $this->hasMany('App\Category','parent_id','id');
	}

}
