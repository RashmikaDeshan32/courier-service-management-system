<?php

namespace App\Http\Controllers\Storekeeper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout(Request $request)
    {   
        Auth::logout();
        return view("login");
    }

    public function dashboard()
    {   
        return view("stockkeeper/home");
    }

}
