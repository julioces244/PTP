<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_image extends Model
{
    protected $primaryKey = 'idTypeimage';
    protected $table = 'typeimages';
    protected $fillable = ['idTypeimage'];

    public function category(){
      return $this->belongsTo('App\Category','category_id');
    }
}
