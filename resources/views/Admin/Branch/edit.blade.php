<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Branch</title>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

    @include('Admin.header')
      @include('Admin.siderbar')
      
        <div class="content-wrapper">
            <div class="page-heading">
                <h1 class="page-title">Edit branch</h1>
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

                        <form class="form-horizontal" id="form-sample-1" method="post" novalidate="novalidate" action="{{ route('admin.branch.update', ['branch' => $branch->branch_id]) }}">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Provience</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('province') is-invalid @enderror" name="province" id="province">
                                    <option value="">Select Province</option>
                                    @foreach($provinces as $province)
                                        <option value="{{ $province->id }}" {{ $branch->province_id == $province->id ? 'selected' : '' }}>
                                            {{ $province->name }}
                                        </option>
                                    @endforeach
                                    </select>

                                    @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      
                                </div>

                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-10">
                                <select class="form-control @error('province') is-invalid @enderror" name="district" id="district">
                                    <option value="">Select District</option>
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id }}" {{ $branch->district_id == $district->id ? 'selected' : '' }}>
                                            {{ $district->name }}
                                        </option>
                                    @endforeach
                                    </select>

                                    @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror 
                                
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input class="form-control  @error('city') is-invalid @enderror" type="text" name="city" value="{{ $branch->city}}" >
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
                                    <input class="form-control @error('street') is-invalid @enderror" type="text" name="street" value="{{ $branch->street}}">
                                    @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Postal code</label>
                                <div class="col-sm-10">
                                    <input class="form-control  @error('postal_code') is-invalid @enderror" type="text" name="postal_code" value="{{ $branch->postal_code}}">
                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control  @error('contact_number') is-invalid @enderror" type="text" name="contact_number" value="{{ $branch->contact_number}}">
                                    @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ $branch->email}}">
                                    @error('email')
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


    <script>
        jQuery(document).ready(function(){
        jQuery('#province').change(function(){
           // Get the value of the current element (often an input field or select box) and assign it to the variable cid."
           //This code is commonly used in event handlers where you want to capture the value of an input field or select box when some event, like a change or click, occurs.
            let province_id=jQuery(this).val();
          
            jQuery.ajax({
                url:'/getDistrict',
                type:'post',
                data:'pid='+province_id+
                '&_token={{csrf_token()}}',
                success:function(result){
                    jQuery('#district').html(result)
                }
            })
        })

    })
    </script>
</body>

</html>