<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminLogoutController extends Controller
{
    public function __invoke():void {
        auth()->guard()->logout();
    }
}
