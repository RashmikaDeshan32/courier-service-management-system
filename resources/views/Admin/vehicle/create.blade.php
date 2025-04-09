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
                <h1 class="page-title">Add vehicle</h1>
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

                        <form class="form-horizontal" id="form-sample-1" method="post" novalidate="novalidate">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Vehice brand</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand" value="{{ old('brand') }}">
                                    @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Vehicle number</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('vehicle_number') is-invalid @enderror" type="text" name="vehicle_number"  value="{{ old('vehicle_number') }}">
                                    @error('vehicle_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Vehice type</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('vehicle_type') is-invalid @enderror" name="vehicle_type" value="{{ old('vehicle_type') }}">
                                        <option value="">Select type</option>
                                        <option value="">Bike</option>
                                        <option value="">Lorry</option>
                                        <option value="">Three weel</option>
                                      
                                    </select>
                                    @error('vehicle_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Vehice colour</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('vehicle_colour') is-invalid @enderror" name="vehicle_colour" value="{{ old('vehicle_colour') }}">
                                        <option value="">Select colour</option>
                                        <option value="">Blue</option>
                                        <option value="">White</option>
                                        <option value="">Black</option>
                                        <option value="">Red</option>
                                      
                                    </select>
                                    @error('vehicle_colour')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Select branch</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('vehicle_branch') is-invalid @enderror" name="vehicle_branch" value="{{ old('vehicle_branch') }}">
                                        <option value="">Select branch</option>
                                        <option value="">Gampaha</option>
                                        <option value="">Colombo</option>
                                        <option value="">Gall</option>
                                        <option value="">Mathara</option>
                                      
                                    </select>
                                    @error('vehicle_branch')
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