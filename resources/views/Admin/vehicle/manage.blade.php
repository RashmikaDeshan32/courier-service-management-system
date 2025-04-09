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
                <h1 class="page-title">Vehicle Management</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"></li>
                </ol>
            </div>
            
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
                                <th>Brand</th>
                                <th>Vehicle number</th>
                                <th>Type</th>
                                <th>Colour</th>
                                <th>Branch</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>
                                    <label class="ui-checkbox">
                                        <input type="checkbox">
                                        <span class="input-span"></span>
                                    </label>
                                </td>
                                <td>{{ $vehicle->Brand }}</td>
                                <td>{{ $vehicle->last_name }}</td>
                                <td>{{ $vehicle->Vehicle_number}}</td>
                                <td>{{ $vehicle->Type }}</td>
                                <td>{{ $vehicle->Colour }}</td>
                                <td>{{ $staff->Branch }}</td>
                                <td>
                                <form action="{{ route('admin.vehicle.delete', $vehicle->vehicle_id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <a href="{{ route('admin.vehicle.edit', $vechile->vehicle_id) }}" class="btn btn-primary">Edit</a>
                                

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