<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PLMController extends Controller
{

    public function index()
    {
        return User::paginate(20);
    }
}
