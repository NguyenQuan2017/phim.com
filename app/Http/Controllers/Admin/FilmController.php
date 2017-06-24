<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\FilmRepository as Films;
use App\Http\Requests\FilmRequest;
use App\Http\Controllers\Controller;
use App\Models\Film;
use File;

class FilmController extends Controller
{
    private $films;

    public function __construct(Films $films){

    	$this->films=$films;
       // $this->middleware('web');

    }

    public function index(){

    	$films=$this->films->all();

    	return view('admin/film/list',compact('films'));
    }

     public function create()
    {
        return view('admin/film/add');
    }

    public function store(FilmRequest $request){

        $file_image=$request->file('image')->getClientOriginalName();
    	$films=new Film;
    	$films->name_films=$request->name;
    	$films->title=$request->title;
    	$films->content=$request->content;
    	$films->images=$file_image;
        $request->file('image')->move('public/upload/images/',$file_image);
    	$films->save();
    	return redirect('admin/film/list');
    	
    }
    public function show($id){

    	$films=$this->films->find($id);

    	return view('admin/film/edit',compact('films'));
    }

    public function update(Request $request){

        $films=Film::where('id',$request->film_id)->first();
        $file_image=$request->file('image')->getClientOriginalName();
        $films->name_films=$request->name;
        $films->title=$request->title;
        $films->content=$request->content;
        $films->images=$file_image;
        $request->file('image')->move('public/upload/images/',$file_image);
        $films->save();
        return redirect('admin/film/list');
    }

    public function destroy($id){

        $films=$this->films->find($id);
        File::delete('public/upload/images/'.$films['images']);
        $films->delete($id);
        return redirect('admin/film/list');
    }
}
