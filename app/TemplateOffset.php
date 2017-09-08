<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateOffset extends Model
{
    protected $table ='template_offset';
    protected $fillable = array('template_type','img_offset','text_offset','shape_offset','bckgrnd_img','created_at','updated_at');
}
