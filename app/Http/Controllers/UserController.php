<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\User\UserRepositoryImplement;

class UserController extends Controller
{
    protected $user_repository;

    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    /**
     * find User By Id
     *
     * @param  mixed $id
     * @return void
     */
    public function findUserById($id)
    {
        $user_repository = new UserRepositoryImplement(app()->make(User::class));
        $data = $user_repository->getUserById($id);
        return response()->json([
            'status'=>true,
            'code'=>200,
            'data'=>$data,
        ]);
    }

    public function inject(Request $request){
        return [1,2,3,4,$request->name];
    }

}
