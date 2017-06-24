<?php 
namespace App\Repositories;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class UserRepository extends BaseRepository{

	function model(){

		return 'App\User';
	}
}

 ?>