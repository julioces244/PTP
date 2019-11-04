<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
     protected $primaryKey = 'idSchool';
     protected $table = 'schools';
     protected $fillable = ['idSchool'];

     public function archives(){
       return $this->hasMany('App\Archive','school_id');
     }

     public function category(){
       return $this->belongsTo('App\Category','category_id');
     }
}
