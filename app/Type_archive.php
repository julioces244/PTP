<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_archive extends Model
{
    //
     protected $primaryKey = 'idType';
     protected $table = 'typearchives';
     protected $fillable = ['idType'];

     public function archives(){
       return $this->hasMany('App\Archive','type_id');
     }

}
