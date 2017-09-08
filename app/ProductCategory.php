<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'product_category';
    
    protected $fillable = [
          'category_name',
          'parent_id',
          'order_by',
          'status'
    ];
    
    public static $status = ["0" => "0", "1" => "1"];


    public static function boot()
    {
        parent::boot();

        ProductCategory::observe(new UserActionsObserver);
    }
    
    public function products()
    {
        return $this->hasOne('App\Products', 'id', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Products', 'parent_id');
    }

    
    
    
}