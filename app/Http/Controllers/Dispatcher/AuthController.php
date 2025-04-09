<?php

namespace App\Http\Controllers\Dispatcher;

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
        return view("Dispatcher/dashboard");
    }

    public function abouthUs()
    {   
        return view("Dispatcher/abouth-us");
    }
}
