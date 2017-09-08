<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSubCategory extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'product_sub_category';
    
    protected $fillable = [
          'name',
          'product_type',
          'category_type'
    ];
    

    public static function boot()
    {
        parent::boot();

        ProductSubCategory::observe(new UserActionsObserver);
    }
    
    public function products()
    {
        return $this->hasOne('App\Products', 'id', 'product_type');
    }


    public function productcategory()
    {
        return $this->hasOne('App\ProductCategory', 'id', 'category_type');
    }


    public function category()
    {
        return $this->belongsTo('App\ProductCategory');
    }

    
    
    
}