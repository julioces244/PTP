<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Category;
use App\Type_archive;

use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //CONTROLADORES PARA LOS COLEGIOS DE PISCO APRENDIZAJE Imagenes

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


    public function imagepa_sanmartin(){
      return view('imagepa_sanmartin');
    }

    public function imagepa_porras(){
      return view('imagepa_porras');
    }
    public function imagepa_renan(){
      return view('imagepa_renan');
    }
    public function imagepa_carlos(){
      return view('imagepa_carlos');
    }
    public function imagepa_mariategui(){
      return view('imagepa_mariategui');
    }
    public function imagepa_independencia(){
      return view('imagepa_independencia');
    }
    public function imagepa_quiñones(){
      return view('imagepa_quiñones');
    }
    public function imagepa_alegria(){
      return view('imagepa_alegria');
    }
    public function imagepa_beatita(){
      return view('imagepa_beatita');
    }
    public function imagepa_velazco(){
      return view('imagepa_velazco');
    }
    public function imagepa_porsia(){
      return view('imagepa_porsia');
    }


    //CONTROLADORES PARA LOS COLEGIOS DE PISCO DIGITAL Imagenes

    public function imagepd_bandera(){
      return view('imagepd_bandera');
    }


    //CONTROLADORES PARA LOS COLEGIOS DE PISCO TECNOLOGÍA Imagenes
    public function imagept_bandera(){
      return view('imagept_bandera');
    }


}
