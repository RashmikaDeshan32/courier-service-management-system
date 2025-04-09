
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Branch</title>
    <style>
        .btn-toggle {
    width: 100px; /* Adjust the width as needed */
}

    </style>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

             @include('Admin.header')
            @include('Admin.siderbar')

         <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Branch Management</h1>
                
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

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
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
                                        <th>Province</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Street</th>
                                        <th>Pstal code</th>
                                        <th>Contact number</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--$branches variable stores fetched data from the branch table-->
                                @foreach($branches as $branch)
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>{{ $branch->province->name}}</td>
                                        <td>{{ $branch->district->name}}</td>
                                        <td>{{ $branch->city}}</td>
                                        <td>{{ $branch->street}}</td>
                                        <td>{{ $branch->postal_code}}</td>
                                        <td>{{ $branch->contact_number}}</td>
                                        <td>{{ $branch->email}}</td>
                                        <td>{{ $branch->status}}</td>


                                        <td>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <form action="{{ route('admin.branch.toggle', $branch->branch_id) }}" method="POST" class="mr-2">
                                                    @csrf
                                                    @method('post')
                                                    <button type="submit" class="btn btn-toggle {{ $branch->status == 'active' ? 'btn-danger' : 'btn-success' }}">
                                                        @if($branch->status == 'active')
                                                            <i class="fas fa-toggle-on"></i> Deactivate
                                                        @else
                                                            <i class="fas fa-toggle-off"></i> Activate
                                                        @endif
                                                    </button>
                                                </form>

                                                <form action="{{ route('admin.branch.edit', $branch->branch_id) }}" method="get" class="mr-2">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil font-14"></i></button>
                                                </form>

                                                <form action="{{route('admin.branch.delete',$branch->branch_id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash font-14"></i></button>
                                                </form>
                                            </div>

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