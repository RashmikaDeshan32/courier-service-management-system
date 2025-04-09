<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    
    public function index()
    {
        //Fetch all records from branch table
        $Vehicles = Vehicle::all();
        //Pass branch data to view through branches variable
        return view('Admin.vehicle.manage', compact('Vehicles'));
    }

   

   
    public function create()
    {
        return view("Admin/vehicle/create");
    }

    
    public function store(Request $request)
    {

        $request->validate([
            'brand' => 'required',
            'vehicle_number' => 'required',
            'vehicle_type' => 'required',
            'vehicle_colour' => 'required',
            'vehicle_branch' => 'required',
            
        ]);

     

        Vehicle::create([
            'brand' => $request['brand'],
            'vehicle_number' => $request['vehicle_number'],
            'vehicle_type' => $request['vehicle_type'],
            'vehicle_colour' => $request['vehicle_colour'],
            'vehicle_branch' => $request['vehicle_branch'],
            
        ]);
        
    }

    
    public function show(Vehicle $vehicle)
    {
        
    }

    
    public function edit(Vehicle $vehicle)
    {
        
        //$branch variable contains attributes and their values of the instance that we want to edit
        return view('Admin/vehicle/edit', compact('vehicle'));
    }

   
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'brand' => 'required',
            'vehicle_number' => 'required',
            'vehicle_type' => 'required',
            'vehicle_colour' => 'required',
            'vehicle_branch' => 'required',
            
           
            
        ]);
    }

    
    public function destroy(Vehicle $vehicle)
    {
        
    }
}
