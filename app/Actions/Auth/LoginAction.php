<?php

namespace App\Actions\Auth;


use App\Http\Resources\Api\Auth\ClientResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class LoginAction
{
    public function __construct()
    {
    }
    public function __invoke($request)
    {
        $data = ['email' => $request->email, 'password' => $request->password];

        $attempt = Auth::guard("client")->attempt($data);
        if ($attempt) {
            $client =  Auth::guard("client")->user() ;
            $client->tokens()->delete();
            $client->save();
            $token =  $client->createToken(env('SECRETE'))->plainTextToken;
            return ["data" => new ClientResource($client), "token" => $token];
        }
        throw new UnauthorizedException();
    }
}
