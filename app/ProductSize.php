<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSize extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'product_size';
    
    protected $fillable = [
          'product_id',
          'width',
          'height',
          'dimension'
    ];

     protected $dimension = [
        'mm' => 'mm',
        'inc' => 'inc',
        'cm' => 'cm'
    ];

      public function getDimension()
    {
        return $this->dimension;
    }

    public static function boot()
    {
        parent::boot();

        ProductSize::observe(new UserActionsObserver);
    }
    
    public function products()
    {
        return $this->hasOne('App\Products', 'id', 'product_id');
    }


    
    
    
}