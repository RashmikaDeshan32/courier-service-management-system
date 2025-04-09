<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manage Category</title>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

    @include('Admin.header')
      @include('Admin.siderbar')

      <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Category Management</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"></li>
                </ol>
            </div>
            @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                     @endif
            
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"></div>
                    </div>
            

                    <div class="ibox-body">
                        <div class="table-responsive">
                            

                        <table class="table">
                        <thead>
                            <tr>
                                <th width="50px"></th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>
                                    <label class="ui-checkbox">
                                        <input type="checkbox">
                                        <span class="input-span"></span>
                                    </label>
                                </td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                
                                

                               
                                <td>
                                <form action="{{ route('admin.category.delete', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <a href="{{route ('admin.category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you shure you want to delete this record?')">Delete</button>
                                </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                           


                        </div>
                    </div>
                </div>



               
                </div>
                <div>
                    
                </div>
            </div>
        
        </div>

     

                    
    </div>

</body>

</html>