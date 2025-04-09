<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    
    public function index()
    {
        $staffs = Staff::with('user')->latest()->paginate(5); // Retrieve paginated staff data along with user data
        $currentPage = $staffs->currentPage(); // Get the current page number
        $startIndex = ($currentPage - 1) * 5 + 1; // Calculate the start index for the pagination
        return view('Admin/staff/manage', compact('staffs', 'startIndex')); // Pass data to the view
    }

  
    public function create()
    {
        $branches = Branch::pluck('city', 'branch_id');
        return view ('Admin/staff/create')->with('branches',$branches);
    }


    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'street' => 'required',
            'contact_number' => ['required','regex:/^[0-9]{10}$/'], 
            'role' => 'required',
            'branch' => 'required',
            'email' => ['required', 'email', 'unique:users,email'], 
            'password' => ['required', 'string', 'min:8'], 
        ]);
    

            // Create a new Staff instance using mass assignment
             //Staff::create($request->all());

                // Redirect to the appropriate route after successful creation
            // return redirect()->route('Admin.staff.manage')->with('success', 'Staff created successfully');


            // Create a new user
            $user = User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => $request['role'],
            ]);

        // Check if the user was created successfully
            if ($user) {
                // Create a new staff member and associate it with the user

                $staff = new Staff([
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'gender' => $request['gender'],
                    'city' => $request['city'],
                    'street' => $request['street'],
                    'contact_number' => $request['contact_number'],
                    'branch_id' => $request['branch'],
                    
                ]);
                $staff->user_id = $user->id; // Assign the user ID
                $staff->save();
            

                if ($staff) {
                    // Staff member created successfully and redirecte to /admin/staff-manage
                    return redirect()->route('admin.staff.index')->with('success', 'Staff created successfully');
                
                } else {
                    // Error creating staff member
                    return redirect()->back()->with('error', 'Failed to create staff member.');
                }
                } else {
                // Error creating user
                return redirect()->back()->with('error', 'Failed to create user.');
                }


    }

   
    public function show(Staff $staff)
    {
        
    }

    
    public function edit(Staff $staff)
    {
       
        return view('Admin/staff/edit',compact('staff'));
    }

   
    public function update(Request $request, Staff $staff)
    {
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'city' => 'required',
        'street' => 'required',
        'contact_number' => 'required',
        'email' => 'required|email',
        'role' => 'required',
        'password' => 'required|min:8', // Ensure password is at least 8 characters and includes '@'
    ]);

    // Update the staff details
    $staff->update($request->all());

     // Update the corresponding user's type column
     $user = $staff->user;
     $user->update([
         'type' => $request->role,
     ]);
    


    return redirect()->route('admin.staff.index')->with('success','Staff updated successfully');
    }



   
    public function destroy(Staff $staff)
    {

        $staff->delete();
        return redirect()->route('admin.staff.index')->with('success','Staff deleted sucessfully');
        
    }
}
