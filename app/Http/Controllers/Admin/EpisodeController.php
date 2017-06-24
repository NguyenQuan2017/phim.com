<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Http\Requests\EpisodeRequest;

class EpisodeController extends Controller
{
	public function index(){

		$episode=Episode::all();

		return view('admin/episode/list',compact(
			'episode'));
	}    

	public function create(){

		return view('admin/episode/add');
	}

	public function store(EpisodeRequest $request){

		$episode= new Episode;
		$episode->episode = $request->episode;
		$episode->link_video = $request->link_video;

		$episode->save();

		return redirect('admin/episode/list');

	}

	public function show($id){

		$episode=Episode::find($id);

		return view('admin/episode/edit',compact('episode'));
	}

	public function update(Request $request){


		$episode=Episode::where('id',$request->episode_id)->first();
		$episode->episode = $request->episode;
		$episode->link_video = $request->link_video;

		$episode->save();

		return redirect('admin/episode/list');


	}

	public function destroy($id){

		$episode=Episode::find($id);
		$episode->delete($id);
		return redirect('admin/episode/list');
	}
}
