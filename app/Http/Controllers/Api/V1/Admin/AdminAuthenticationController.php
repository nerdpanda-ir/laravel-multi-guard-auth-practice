<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminAuthResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminAuthenticationController extends Controller
{
    public function __invoke():JsonResource
    {
        $user = auth('admin')->attempt([
            'email'=>'admin@admin.ir' , 
            'password'=> 'admin'
        ]);
        $admin = auth('admin')->user();
        $token = $admin->createToken('auth-token');
        return AdminAuthResource::make(['admin'=> $admin,'token'=>$token]);
    }
}
