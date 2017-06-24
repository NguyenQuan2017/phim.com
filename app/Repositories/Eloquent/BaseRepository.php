<?php 
namespace App\Repositories\Eloquent;

use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\RepositoryInterface; 
use lluminate\Database\Query\Builder;

abstract class BaseRepository implements RepositoryInterface{

	protected $model;
	private $app;
    protected $validator;

	public function __construct(App $app){

		$this->app=$app;
		$this->makeModel();
        $this->makeValidator();

	} 

	abstract function model();

	 public function all($columns = ['*'])
    {
        return $this->model->get($columns);
    }


    public function validator()
    {

        if ( isset($this->rules) && ! is_null($this->rules) && is_array($this->rules) && !empty($this->rules) ) {
            if ( class_exists('Prettus\Validator\LaravelValidator') ) {
                $validator = app('Prettus\Validator\LaravelValidator');
                if ($validator instanceof ValidatorInterface) {
                    $validator->setRules($this->rules);
                    return $validator;
                }
            } else {
                throw new Exception( trans('repository::packages.prettus_laravel_validation_required') );
            }
        }

        return null;
    }


    public function makeValidator($validator = null)
    {
        $validator = !is_null($validator) ? $validator : $this->validator();

        if ( !is_null($validator) ) {
            $this->validator = is_string($validator) ? $this->app->make($validator) : $validator;

            if (!$this->validator instanceof ValidatorInterface ) {
                throw new RepositoryException("Class {$validator} must be an instance of Prettus\\Validator\\Contracts\\ValidatorInterface");
            }

            return $this->validator;
        }

        return null;
    }

    /*
	* Find Data By id
    */
    public function find($id, $columns=['*']){

    	return  $this->model->findOrFail($id,$columns);
    }

  public function visible(array $fields)
    {
        $this->model->setVisible($fields);
        return $this;
    }

    public function findWhere( array $where , $columns = array('*'))
    {
        $this->applyCriteria();
        $this->applyScope();

        foreach ($where as $field => $value) {
            if ( is_array($value) ) {
                list($field, $condition, $val) = $value;
                $this->model = $this->model->where($field,$condition,$val);
            } else {
                $this->model = $this->model->where($field,'=',$value);
            }
        }

        $model = $this->model->get($columns);
        $this->resetModel();

        return $this->parserResult($model);
    }



 //    /*
	// * Save a Entity in Repository
 //    */


	 public function update(array $attributes, $id)
    {
        $this->applyScope();

        if ( !is_null($this->validator) ) {
            $this->validator->with($attributes)
                ->setId($id)
                ->passesOrFail( ValidatorInterface::RULE_UPDATE );
        }

        $_skipPresenter = $this->skipPresenter;

        $this->skipPresenter(true);

        $model = $this->model->findOrFail($id);
        $model->fill($attributes);
        $model->save();

        $this->skipPresenter($_skipPresenter);
        $this->resetModel();

        event(new RepositoryEntityUpdated($this, $model));

        return $this->parserResult($model);
    }

	public function delete($id){

		return $this->model->destroy($id);
	}

	/*
	* 
	*/
       /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws RepositoryException
     */
    public function makeModel() {
        $model = $this->app->make($this->model());
 
        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} ");
 
        return $this->model = $model->newQuery();
    }
}

 ?>