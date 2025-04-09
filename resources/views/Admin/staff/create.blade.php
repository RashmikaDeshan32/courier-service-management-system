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
                <h1 class="page-title">Add staff</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"></li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"></div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">

                        <form class="form-horizontal" id="form-sample-1" method="post" action="/admin/staff-store">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" >First Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control form-control @error('email') is-invalid @enderror" type="text" name="first_name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                           


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}">
                                        <option value="">Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" value="{{ old('city') }}">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Street</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('street') is-invalid @enderror" type="text" name="street" value="{{ old('street') }}">
                                    @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact number</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('contact') is-invalid @enderror" type="text" name="contact_number"  value="{{ old('contact') }}">
                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Staff Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}">
                                        <option value="">Select Role</option>
                                        <option value="dispatcher">Dispatcher</option>
                                        <option value="deliveryPerson">Delivery person</option>
                                        <option value="Casher">Cashier</option>
                                        <option value="Stockkeeper">Stock keeper</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Select Branch</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('branch') }}">
                                        @foreach($branches as $branch_id => $city)
                                        <option value="{{$branch_id}}">{{$city}}</option>
                                        @endforeach
                                       
                                        
                                    </select>
                                    @error('branch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</body>

</html>