<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserLogoutController extends Controller
{
    public function __invoke():void {
        auth()->guard()->logout();
    }
}
