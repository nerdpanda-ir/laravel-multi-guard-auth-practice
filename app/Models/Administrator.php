<?php

namespace App\Models;

use App\Contract\Models\Adminable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Sanctum\HasApiTokens;

class Administrator extends Model implements Adminable , AuthenticatableContract
{
    use HasFactory , Authenticatable , HasApiTokens ;
}
