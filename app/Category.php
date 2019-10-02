<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
     protected $primaryKey = 'idCategory';
     protected $table = 'categories';
     protected $fillable = ['idCategory'];

     public function archives(){
       return $this->hasMany('App\Archive','category_id');
     }
}
