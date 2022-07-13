<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{
    public function __invoke():void
    {
        echo '<h1> welcome '.auth()->user()->name.'</h1>';
    }
}
