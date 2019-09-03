<?php

namespace App\Http\Controllers;

use App\Archive;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

use Carbon\Carbon;

class admarchiveController extends Controller
{

/*
  public function __construct()
{
  $this->middleware('auth');
  $this->middleware('guest');
}*/



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $archives = Archive::all();
        return view('showarchives', compact('archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('intraplus');
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
      }

      $archive = new Archive();
      $archive->filename = $request->input('filename');
      $archive->archive = $filename;
      $archive->save();
      return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idArchive)
    {
        //
        $archive = Archive::find($idArchive);
        $archive->delete();

        return redirect()->route('admarchive.index')->with('success','Eliminado correctamente');

        /*
        dd("GO");
        $archive = Archive::findOrFail($idArchive);
        dd($archive);
        $archive->delete();
        dd("Go2");+
        return view ('intraplus');*/


    }
}
