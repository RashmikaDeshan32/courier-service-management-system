<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    
    public function index()
    {
        

        $categories =Category::get();
        return view ('Admin/Category/manage',compact('categories'));
    }

  
    public function create()
    {
        return view ('Admin/Category/create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required',
             
        ]);
    
        // Create a new category
        Category::create([
            'name' => $request['category'],
        ]);
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');

    }

   
    public function show(Staff $staff)
    {
        
    }

    
    public function edit( Category $category)
    {
        

        return view('Admin/Category/edit', compact('category'));
       
       
    }

   
    public function update(Request $request, Category $category)
    {
    $request->validate([
        'category' => 'required',
        
        
    ]);

    
    $category->update([
        'name' => $request->category,
        
    ]);

    


    return redirect()->route('admin.category.index')->with('success','Category updated successfully');
    }



   
    public function destroy(Category $category)
    {

        $category->delete();
        return redirect()->route('admin.category.index')->with('success','Category deleted sucessfully');
        
    }
}
