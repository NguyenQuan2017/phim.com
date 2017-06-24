<?php 
namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Contracts\RepositoryInterface;


class FilmRepository extends BaseRepository{

	function model(){

		return 'App\Models\Film';
	}


} 
 ?>