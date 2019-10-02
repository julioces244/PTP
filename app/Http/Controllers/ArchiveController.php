<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Category;
use App\Type_archive;

use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

/*
     public function __construct()
     {
         $this->middleware('auth');
     }
*/
    public function index()
    {

      //setlocale(LC_ALL, 'es_ES');
      //$fecha = Carbon::now();
      //$mes = $fecha->formatLocalized('%d de %B del %Y %R');// mes en idioma español
      //dd($mes);
      $archives = Archive::all()->where('category_id', 1)->where('type_id',1);
      $apr_bis = Archive::all()->where('category_id',1)->where('type_id',2);
      //$apr_otros = Archive::all()->where('category_id',1)->where('type_id',3);
      //$archives = Archive::All();
      return view('test')->with('archives',$archives)->with('apr_bis',$apr_bis);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = "";

        if($request->hasFile('archive')){
          $archive = $request->file('archive');
          $filename = time().$archive->getClientOriginalName();
          $archive->move(public_path().'/documents/',$filename);
          //dd($filename);
          //return $filename;

        }

        $archive = new Archive();
        $archive->filename = $request->input('filename');
        $archive->archive = $filename;
        $archive->save();
        $archives = Archive::all();
        return view('test', compact('archives'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function show(Archive $archive)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function edit(Archive $archive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archive $archive)
    {
        //
    }
    /*
    public function _construct(){
      $this->middleware('auth');
    }*/
}
