<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserDashboardResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDashboard extends Controller
{
    public function __invoke():JsonResource
    {
        return UserDashboardResource::make(['user'=>auth()->user()]);
    }
}
