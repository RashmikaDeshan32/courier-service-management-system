<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {     
        try {
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
          
                if (Auth::user()->type == 1)
                {  
                    return view("admin/dashboard");
                    
                }elseif(Auth::user()->type == 2)
                {
                    return view("Dispatcher/dashboard");   

                }elseif(Auth::user()->type == 3)
                {
                    return view("DeliveryPerson/home");
                }elseif(Auth::user()->type == 4)
                {
                    return view("Cashier/home");

                }elseif(Auth::user()->type == 5)
                {
                    return view("StoreKeeper/home");
                }elseif(Auth::user()->type == 6)
                {
                    return view("Customer/dashboard");
                }             

            } else {
                return redirect()->back()->with('delete', 'Unauthorized.');     
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('delete', 'Unauthorized.');     
        }

    }

    public function logout(Request $request)
    {   
        Auth::logout();
        return view("login");
    }

}
