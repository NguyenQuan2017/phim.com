<?php 
namespace App\Repositories\Contracts;

interface RepositoryInterface{


	public function all($columns=['*']);

	public function find($id,$columns=['*']);

	public function findWhere( array $where , $columns = array('*'));

	 public function visible(array $fields);


	 public function update(array $attributes, $id);

	public function delete($id);
}

 ?>