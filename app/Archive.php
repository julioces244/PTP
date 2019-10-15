<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    //
     protected $primaryKey = 'idArchive';
     protected $table = 'archives';
     protected $fillable = ['idArchive'];

     public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function type_archives()
    {
        return $this->belongsTo('App\Type_archive', 'type_id');
    }

    public function school(){
        return $this->belongsTo('App\School', 'school_id');
    }
}
