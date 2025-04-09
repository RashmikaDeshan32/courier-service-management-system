<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\District;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class pickupController  extends Controller
{
    
    public function delivery_cost(Request $request)
{
    $csrfToken = $request->header('X-CSRF-TOKEN');
    

    
    // Retrieve JSON data from the request
    $jsonData = $request->getContent();

    // Decode the JSON data to an associative array
    $packages = json_decode($jsonData, true);

    

    // Initialize total cost variable
    $totalCostSameArea = 0;
    $totalCostOutstation = 0;



    foreach ($packages as $package) {

        
    

        $validator = Validator::make($package, [
            'weight' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'area' => 'required|in:same_district,outstation',
            //'description' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            // Log validation errors
            ('Validation errors: ' . $validator->errors()->toJson());

            // Return validation error messages
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $weight = $package['weight'];
        $quantity = $package['quantity'];
        $area = $package['area'];

       

        if( $area ===  'same_district'){

            if( $weight <= 1  ){

                $first_kilo = 300;
                $totalCostOutstation = $totalCostOutstation +$first_kilo;
            }
            else{

                $first_kilo = 300;
                $extra_kilo = $weight - 1;
                $totalCostSameArea =  $totalCostSameArea + $first_kilo + ($extra_kilo * 75);
                

            }

        }
        else if ($weight <= 1 && $area ===  'oustation'){

            $first_kilo = 450;
            $totalCostOutstation  = $totalCostOutstation +$first_kilo;
        

        }
        else{
            
            $first_kilo = 450;
            $extra_kilo = $weight - 1;
            $totalCostOutstation = $totalCostOutstation +$first_kilo + ($extra_kilo * 150);
        }
    

            
          
            
        }

        if (!empty($errors)) {
            return response()->json(['errors' => $errors], 400);
        }


        $total_cost = $totalCostSameArea + $totalCostOutstation;
        
        return response()->json(['totalCost' =>  $total_cost]);


        

       
    }

    public function pickup_store(Request $request){
        try {
            $validatedData = $request->validate([
                'reciver_name' => 'required|string|max:255',
                'reciver_address' => 'required|string|max:255',
                'reciver_contact_number' => 'required|string|max:255',
                'reciver_postal_code' => 'required|string|max:255',
                'reciver_email' => 'required|string|max:255',
                'pickupDate' => 'required|string|max:255',
                'pickupTime' => 'required|string|max:255',
                'payment_type' => 'required|string|max:255',
                'payment_by' => 'required|string|max:255',
                'weight' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:1',
                'area' => 'required|in:same_district,outstation',
            ]);
    
            // If validation passes, process the form data
            // Your processing logic goes here
    
            // Return a success response if everything is successful
            return response()->json(['success' => true]);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, return validation errors
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
    
    


}

    



