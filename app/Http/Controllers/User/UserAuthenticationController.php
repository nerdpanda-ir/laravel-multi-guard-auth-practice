<?php

namespace App\Http\Controllers\User;

use App\Contract\Models\Userable;
use App\Http\Controllers\Controller;

class UserAuthenticationController extends Controller
{
    public function login():void {
        $doLogin = route('do-user-login');
        echo "<h1> Login form </h1> <a href='$doLogin'>do-login</a>";
    }
    public function doLogin(Userable $userable):void{
        auth()->guard()->login($userable->first('id'));
        echo 'welcome';
    }
}
