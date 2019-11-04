<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = 'idImage';
    protected $table = 'images';
    protected $fillable = ['idImage'];

    public function school(){
        return $this->belongsTo('App\School', 'school_id');
    }

    public function typeimage(){
        return $this->belongsTo('App\Type_image', 'typeimage_id');
    }
}
