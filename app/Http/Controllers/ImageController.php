<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Category;
use App\Type_archive;

use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function index()
    {

      //setlocale(LC_ALL, 'es_ES');
      //$fecha = Carbon::now();
      //$mes = $fecha->formatLocalized('%d de %B del %Y %R');// mes en idioma español
      //dd($mes);
      $apr_pvs = Archive::all()->where('category_id', 1)->where('type_id',4);
      $apr_pes = Archive::all()->where('category_id',1)->where('type_id',5);
      $apr_tps = Archive::all()->where('category_id',1)->where('type_id',6);

      //$apr_otros = Archive::all()->where('category_id',1)->where('type_id',3);
      //$archives = Archive::All();
      return view('imagepa')->with('apr_pvs',$apr_pvs)->with('apr_pes',$apr_pes)->with('apr_tps',$apr_tps);
        //
    }


}
