<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){

      $filename = "";

      if($request->hasFile('notice')){
        $notice = $request->file('notice');
        $filename = time().$notice->getClientOriginalName();
        $notice->move(public_path().'/img_notices/',$filename);
        //dd($filename);
        //return $filename;
      }

      $notice = new Notice();
      $notice->name = $request->input('name');
      $notice->title = $request->input('title');
      $notice->description = $request->input('description');
      $notice->category = $request->input('category');
      $notice->image = $filename;
      $archive->save();


    }

    public function delete(){

    }


}
