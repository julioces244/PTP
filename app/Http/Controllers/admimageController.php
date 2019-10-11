<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Category;
use App\Type_archive;

use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

class admimageController extends Controller
{
    //

    public function create()
    {

      $categories = Category::all();
      $types = Type_archive::all()->where('modulo','Imagen');
      return view ('uploadimage')->with('categories', $categories)->with('types', $types);

    }


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
      $archive->category_id = $request->input('category');
      $archive->type_id = $request->input('type');
      $archive->archive = $filename;
      $archive->save();
      return redirect()->route('listar');
    }
}
