<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/01/16
 * Time: 16:51
 */

namespace App\Repositories;


use App\User;
use Illuminate\Database\Eloquent\Model;
use Mockery\CountValidator\Exception;

abstract class UserRepository implements RepositoryInterface
{

    protected $model;

    /**
     * UserRepository constructor.
     * @param $model
     *
     * Type-Hinting
     *
     */
    public function __construct($model)
    {
        $this->model = $this->makeModel();
    }

    abstract function model();


    public function makeModel()
    {
        $model=App::make($this->model());

        if($model instanceof Model){
            throw new Exception;
        }

        return $model;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model::all();
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*'))
    {
        // TODO: Implement find() method.
    }

    /**
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }
}