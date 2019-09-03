<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    //
    protected $primaryKey = "id";
    protected $table = "notice";
    protected $fillable = ["id"];

}
