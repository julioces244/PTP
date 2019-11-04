<?php

namespace App\Http\Controllers;

use App\Archive;
use App\School;
use App\Category;
use App\Image;
use App\Type_archive;
use App\Type_image;

use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //CONTROLADORES PARA LOS COLEGIOS DE PISCO APRENDIZAJE Imagenes


    public function imagepa_school(){
        return view('imagepa_school');
    }

    public function imagepd_school(){
        return view('imagepd_school');
    }

    public function imagept_school(){
        return view('imagept_school');
    }

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

    public function imagecategories(){
      $imgcategories = Category::all();
      return view('imagecategories')->with('imgcategories',$imgcategories);
    }

    public function imageschools($categories){
      //Obtengo instancia de la clase categoria, en la cual obtengo su id, en donde le paso la abreviatura
      $imgcategories = Category::where('abreviatura',$categories)->select("idCategory")->first();
      //dd($imgcategories);
      //Una vez que obtengo la instancia, le saco el id, y busco a las escuelas segun el id de la categoria
      $schools = School::where('category_id', $imgcategories->idCategory)->get();

      return view('imageschools')->with('schools',$schools);
    }

    public function imagetypes($categories, $schools){

      //Obteniendo id categoria de imagen
      $imgcategories = Category::where('abreviatura',$categories)->select("idCategory")->first();

      //Obteniendo tipo de imagen por medio del id de la categoria
      $typeimages = Type_image::where('category_id',$imgcategories->idCategory)->get();

      return view('imagetypes')->with('typeimages',$typeimages)->with('categories',$categories)->with('schools',$schools);
    }

    public function imagefiles($categories, $schools, $types){


      $imgcategories = Category::where('abreviatura',$categories)->select("idCategory")->first();
      $typeimages = Type_image::where('category_id',$imgcategories->idCategory)->get();
      //Se obtiene un objeto de tipo Type_image, en la cual se le extrae el id abajo con $idtype->idTypeimage

      //dd($imgcategories);
      $idtype = Type_image::where('nombre',$types)->where('category_id',$imgcategories->idCategory)->first();

      //Obteniedo las imagenes segun el tipo y segun el colegio (no hace falta obtenerlo segun categoria porque ya esta dentro del colegio y/o el tipo)
      $imagefiles = Image::where('typeimage_id', $idtype->idTypeimage)->where('school_id',$schools)->get();

      //$imagefiles = Image::where('typeimage_id', 31)->where('school_id',19)->get();
      //dd($idtype->idTypeimage);
      return view('imagefiles')->with('imagefiles',$imagefiles);
    }




}
