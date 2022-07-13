<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserPanelController extends Controller
{
    public function __invoke():void
    {
        echo '<h1> welcome '.auth()->user()->name.'</h1>';
    }
}
