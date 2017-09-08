<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'template_module';
    
    protected $fillable = [
          'template_name',
          'product_type',
          'template_size'
    ];
    

    public static function boot()
    {
        parent::boot();

        Template::observe(new UserActionsObserver);
    }
    
    
    
    
}