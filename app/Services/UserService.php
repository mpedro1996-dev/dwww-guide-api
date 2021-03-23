<?php

namespace App\Services;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;


class UserService {

    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function register(UserRequest $request)
    {      

        $this->userModel = new User;

        $this->userModel->name = $request->name;
        $this->userModel->email = $request->email;
        $this->userModel->password = Hash::make($request->password);

        $this->userModel->save();

        return new UserResource($this->userModel);

    }

}