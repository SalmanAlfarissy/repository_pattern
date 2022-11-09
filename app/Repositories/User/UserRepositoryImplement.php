<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\UserRepository;

class UserRepositoryImplement implements UserRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * get User By Id
     *
     * @param  mixed $id
     * @return void
     */
    public function getUserById($id)
    {
        return $this->model->find($id);
    }
}
