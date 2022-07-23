<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminDashboardResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminDashboardController extends Controller
{
    public function __invoke():JsonResource
    {
        $admin = auth('admin_api')->user();
        return AdminDashboardResource::make(['admin'=>$admin]);
    }
}
