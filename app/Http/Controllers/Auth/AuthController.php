<?php

namespace App\Http\Controllers\Auth;

use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $userService;

    public function __construct()
    {
        $this->userService = App::make(UserService::class);

    }

    public function register(UserRequest $request)
    {
        return $this->userService->register($request);
    }
}
