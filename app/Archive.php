<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    //
    protected $primaryKey = 'idArchive';
     protected $table = 'archive';
     protected $fillable = ['idArchive'];
}
