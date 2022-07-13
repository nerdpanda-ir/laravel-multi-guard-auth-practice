<?php

namespace App\Http\Controllers\Admin;

use App\Contract\Models\Adminable;
use App\Http\Controllers\Controller;

class AdminAuthenticationController extends Controller
{
    public function login():void {
        $doLogin = route('do-admin-login');
        echo "<h1> Login form </h1> <a href='$doLogin'>do-login</a>";
    }
    public function doLogin(Adminable $adminable):void{
        auth()->guard('admin')->login($adminable->first('id'));
        echo 'welcome';
    }
}
