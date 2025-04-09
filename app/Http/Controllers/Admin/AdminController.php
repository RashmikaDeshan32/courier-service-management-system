<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
   
    public function logout(Request $request)
    {   
        Auth::logout();
        return view("Admin/login");
    }

    public function dashboard()
    {   
        return view("Admin/dashboard");
    }

    public function branch_create(){

        return view("Admin/Branch/create");
    }

    public function branch_manage(){

        return view ("Admin/Branch/manage");
    }

}
