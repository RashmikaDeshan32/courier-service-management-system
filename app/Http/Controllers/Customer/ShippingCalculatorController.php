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

class ShippingCalculatorController  extends Controller
{
    
   public function viewController(){

      $districts = District::get();

    return view ('Customer/rateCalculator',compact('districts'));
   }

   public function calculateDeliveryCost(Request $request)
    {
      
        // Get the CSRF token from the request headers
        $csrfToken = $request->header('X-CSRF-TOKEN');

    
        $validator = Validator::make($request->all(), [
            'from_district_id' => 'required',
            'to_district_id' => 'required',
            'weight' => 'required|numeric|min:0.1'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // Log validation errors
            ('Validation errors: ' . $validator->errors()->toJson());

            // Return validation error messages
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        // Retrieve the selected district IDs and weight from the request
        $fromDistrictId = $request->input('from_district_id');
        $toDistrictId = $request->input('to_district_id');
        $weight = $request->input('weight');

        if( $fromDistrictId ===  $toDistrictId ){

            if( $weight <= 1){

                $first_kilo = 300;
                $total_cost = $first_kilo;
            }
            else{

                $first_kilo = 300;
                $extra_kilo = $weight - 1;
                $total_cost = $first_kilo + ($extra_kilo * 75);

            }

            return response()->json([
                'total_cost' => $total_cost,
                'message' => 'Within same district',
            ]);
        }
        else{

            if( $weight <= 1){

                $first_kilo = 450;
                $total_cost = $first_kilo;
            }
            else{

                $first_kilo = 450;
                $extra_kilo = $weight - 1;
                $total_cost = $first_kilo + ($extra_kilo * 150);
            }

            return response()->json([
                'total_cost' => $total_cost,
                'message' => 'Oustation',
            ]);
            
        }

       

    

        // Perform your logic here...
        // Calculate the delivery cost based on the selected district IDs and weight



        // For testing purposes, return a dummy response with total_cost
        $totalCost = 100; // Dummy value, replace with actual calculation
       // return response()->json(['total_cost' => $totalCost]);
    }





 


   

}

