<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Seasion;
use App\Http\Requests\SeasionRequest;

class SeasionController extends Controller
{
    public function index(){

    	$seasion=Seasion::all();

    	return view('admin/seasion/list',compact('seasion'));
    }

    public function create(){

    	return view('admin/seasion/add');
    }

    public function store(SeasionRequest $request){

    	$seasion=new Seasion;

    	$seasion->seasion=$request->seasion;
    	$seasion->save();
    	return redirect('admin/seasion/list');
    }

    public function show($id){

    	$seasion=Seasion::find($id);

   		return view('admin/seasion/edit',compact('seasion'));
    }

    public function update(Request $request){

    	$seasion=Seasion::where('id',$request->seasion_id)->first();
    	$seasion->seasion=$request->seasion;
    	$seasion->save();

    	return redirect('admin/seasion/list');
    }

    public function destroy($id){

    	$seasion=Seasion::find($id);
    	$seasion->delete($id);

    	return redirect('admin/seasion/list');
    }
}
