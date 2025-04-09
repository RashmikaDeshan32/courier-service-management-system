<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function dashboard()
    {   
        return view("Customer/dashboard");
    }

    public function tracking(){

        return view("Customer/tracking");
    }


    public function register()
    {   
        return view("Customer/register");
    }
    public function login()
    {   
        return view("Customer/login");
    }
    


    public function create_customer(Request $request)
    {   
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'id_number' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            // 'type' => ['required'],

        ]);

        $user = User::create([
            //'name' => $request['first_name'],

            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => 6,

        ]);

         Customer::create([
        'first_name' => $request['first_name'],
        'last_name' => $request['last_name'],
        'mobile' => $request['mobile'],
        'street' => $request['street'],
        'city' => $request['city'],
        'postal_code' => $request['postal_code'],
        'id_number' => $request['id_number'],
        'user_id' => $user->id,
        ]);

    }
    


    public function login_check(Request $request)
    {   
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|max:255',
        ]);
        
    
        if (Auth::attempt(['email' => $request['email'], 'password' =>  $request['password'] ])) {

            $user = Auth::user();
            $request->session()->put('loginId', $user->id);
            return view("Customer/dashboard");

        

        } else {
            return redirect()->back()->with('delete', 'Unauthorized.')->withErrors(['email' => 'Invalid email or password']);
        }
    }
    

   

}
