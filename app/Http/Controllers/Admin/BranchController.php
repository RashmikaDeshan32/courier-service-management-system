<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Province;
use App\Models\District;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    
    public function index()
    {
        //Fetch all records from branch table
        //$branches = Branch::all();
        //Pass branch data to view through branches variable
        //return view('Admin.Branch.manage', compact('branches'));


        // Fetch branch data along with related province and district using eager loading
        $branches = Branch::with('province', 'district')->get();

        // Pass the data to the view
        return view('Admin/Branch/manage', ['branches' => $branches]);
    }

   

   
    public function create()
    {
        $provinces = Province::get();

       return view('admin/Branch/create',compact('provinces'));
    }

    
    public function store(Request $request)
    {
       

        $request->validate([
            'province' => 'required',
            'district' => 'required',
            'city' => 'required',
            'street' => 'required',
            'postal_code' => 'required',
            'contact_number' => ['required','regex:/^[0-9]{10}$/'], 
            'email' => ['required', 'email', 'unique:branches,email'], 
            
        ]);

     

        try {
            Branch::create([
                'city' => $request->city,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'province_id' => $request->province,
                'district_id' => $request->district,
                'status' => 'active',
            ]);
    
            // Redirect to the manage route if creation is successful
            return redirect()->route('admin.branch.index')->with('success', 'Branch created successfully.');
        } catch (\Exception $e) {
            // Redirect back to the creation page with an error message
            return redirect()->back()->with('error', 'Failed to create branch. Please try again.');
        }
        
    }

    
    public function show(Branch $branch)
    {
        
    }

    
    public function edit(Branch $branch)
    {
        $provinces = Province::all();
        
        // Fetch districts for the selected province
        $districts = District::where('province_id', $branch->province_id)->orderBy('name', 'asc')->get();
        
        // Generate HTML for district dropdown options
        $html = '<option value="">Select District</option>';
        foreach ($districts as $district) {
            $html .= '<option value="' . $district->id . '">' . $district->name . '</option>';
        }
    
        // Pass the branch, provinces, and HTML for district dropdown to the view
        return view('Admin/branch/edit', compact('branch', 'provinces', 'html','districts'));
    }
    

   
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'province' => 'required',
            'district' => 'required',
            'city' => 'required',
            'street' => 'required',
            'postal_code' => 'required',
            'contact_number' => ['required','regex:/^[0-9]{10}$/'],
            'email' => ['required', 'email', 'unique:branches,email'], 
        ]);
    
        $branch->update([
            'province_id' => $request->province,
            'district_id' => $request->district,
            'city' => $request->city,
            'street' => $request->street,
            'postal_code' => $request->postal_code,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
        ]);
    
        return redirect()->route('admin.branch.index')->with('success', 'Branch updated successfully.');
    }
    

    
    public function destroy(Branch $branch)
    {
        
        $branch->delete();
        return redirect()->route('admin.branch.index')->with('success','Branch deleted sucessfully');
    }

    

    public function getDistrict(Request $request){

        
       $pid=$request->post('pid');
       $districts = District::where('province_id', $pid)->orderBy('name', 'asc')->get();
       $html='<option value="">Select District</option>';



        foreach($districts as $list){

            $html.='<option value="'.$list->id.'">'.$list->name.'</option>';
        }

        return  $html;

    }

    public function toggle(Request $request, Branch $branch)
    {
    
    $newStatus = $branch->status == 'active' ? 'inactive' : 'active';

   
    $branch->update(['status' => $newStatus]);

    
    return redirect()->route('admin.branch.index')->with('success', 'Branch status updated successfully.');
    }

}
