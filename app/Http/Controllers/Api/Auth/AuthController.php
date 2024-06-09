<?php

namespace App\Http\Controllers\Api\Auth;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\RegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;

class AuthController extends Controller
{


    public function login(LoginRequest $request, LoginAction $action)
    {
        return $action($request);
    }

    public function register(RegisterRequest $request, RegisterAction $action)
    {
        return $action($request);
    }


}
