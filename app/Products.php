<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'product';
    
    protected $fillable = [
          'product_name',
          'order_by',
          'status'
    ];
    
    public static $status = ["0" => "0", "1" => "1"];


    public static function boot()
    {
        parent::boot();

        Products::observe(new UserActionsObserver);
    }
    
    public function children()
    {
        return $this->hasMany('App\Category','parent_id','id');
    }
    
    
    
}