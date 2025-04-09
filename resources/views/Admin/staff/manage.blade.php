<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add staff</title>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

    @include('Admin.header')
      @include('Admin.siderbar')

      <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Staff Management</h1>
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Street</th>
                                <th>Contact number</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staffs as $staff)
                            <tr>
                                <td>
                                    <label class="ui-checkbox">
                                        <input type="checkbox">
                                        <span class="input-span"></span>
                                    </label>
                                </td>
                                <td>{{ $staff->first_name }}</td>
                                <td>{{ $staff->last_name }}</td>
                                <td>{{ $staff->gender }}</td>
                                <td>{{ $staff->city }}</td>
                                <td>{{ $staff->street }}</td>
                                <td>{{ $staff->contact_number }}</td>
                                <td>
                                    @if($staff->user->type == 1)
                                        Admin
                                    @elseif($staff->user->type == 2)
                                        Dispatcher
                                    @elseif($staff->user->type == 3)
                                        Delivery Person
                                    @elseif($staff->user->type == 4)
                                        Cashier
                                    @elseif($staff->user->type == 5)
                                        Stockkeeper
                                    @endif
                                </td>

                                <td>{{ $staff->user->email }}</td>
                                <td>
                                <form action="{{ route('admin.staff.delete', $staff->staff_id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <a href="{{ route('admin.staff.edit', $staff->staff_id) }}" class="btn btn-primary">Edit</a>
                                

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
            <!-- END PAGE CONTENT-->
        
        </div>

     

                    
    </div>

</body>

</html>