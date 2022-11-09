<?php

namespace App\Repositories;


interface UserRepository{

    /**
     * getUserById
     *
     * @param  mixed $id
     * @return void
     */
    public function getUserById($id);
}
