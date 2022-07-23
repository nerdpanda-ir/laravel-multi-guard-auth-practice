<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserAuthenticationResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserAuthentication extends Controller
{
    public function __invoke():JsonResource
    {
        $auth = auth()->attempt([
            'email' => 'nerdPanda@nerdpanda.ir' , 
            'password' => 'nerdPanda'
        ]);
        $user = auth()->user();
        $token = $user->createToken('auth-token');
        return UserAuthenticationResource::make(['user'=>$user , 'token' => $token]);
    }
}
