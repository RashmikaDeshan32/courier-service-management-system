<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.53308&themeRevisionID=65660e4b326633110492e01a"/>
    <style>
       
        .form-all {
            max-width: 1200px;
            margin: 0 auto; 
            margin-top: 65px;
        }
    </style>
</head>
<body>
    @include('Customer.header')
<form class="jotform-form" action="{{url('/customer/pickup-store')}}" method="post" name="" id="" accept-charset="utf-8" autocomplete="on">
  @csrf
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvat">
            <h1 id="header_1" class="form-header" data-component="header"></h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Sender information</label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <label class="form-sub-label" id="" style="min-height:13px">Name</label>
              <input type="text" id="name" name="name" class="form-textbox " />
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
              <label class="form-sub-label" for="middle_3" id="sublabel_3_middle" style="min-height:13px">Address</label>
              <input type="text" id="" name="" class="form-textbox" size="10"/>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Contact number</label>
              <input type="text" id="" name="" class="form-textbox"  size="15" data-component="last" value="" />
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Postal Code</label>
              <input type="text" id="" name="" class="form-textbox"  size="15" data-component="last" value="" />
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Email</label>
              <input type="text" id="" name="" class="form-textbox"  size="15" data-component="last" value="" />
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Receiver information</label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <label class="form-sub-label" id="" style="min-height:13px">Name</label>
              <input type="text" id="reciver_name" name="reciver_name" class="form-textbox @error('reciver_name') is-invalid @enderror" />
              @error('reciver_name')
                    <div style="color:red" id="reciver_name">{{ $message }}</div>
              @enderror
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
              <label class="form-sub-label" for="middle_3" id="sublabel_3_middle" style="min-height:13px">Address</label>
              <input type="text" id="reciver_address" name="reciver_address" class="form-textbox @error('reciver_address') is-invalid @enderror" size="10"/>
              @error('reciver_address')
                    <div style="color:red" id="reciver_address">{{ $message }}</div>
              @enderror
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Contact number</label>
              <input type="text" id="reciver_contact_number" name="reciver_contact_number" class="form-textbox @error('reciver_contact_number') is-invalid @enderror"  size="15" data-component="last" value="" />
              @error('reciver_contact_number')
                    <div style="color:red" id="reciver_contact_number">{{ $message }}</div>
              @enderror
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Postal Code</label>
              <input type="text" id="" name="reciver_postal_code" class="form-textbox @error('reciver_postal_code') is-invalid @enderror"  size="15" data-component="last" value="" />
              @error('reciver_postal_code')
                    <div style="color:red" id="reciver_postal_code">{{ $message }}</div>
              @enderror
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px">Email</label>
              <input type="text" id="" name="reciver_email" class="form-textbox @error('reciver_email') is-invalid @enderror"  size="15" data-component="last" value="" placeholder="Optional" />
              @error('reciver_email')
                    <div style="color:red" id="reciver_email">{{ $message }}</div>
              @enderror
            </span>
            
          </div>
          <br>
          <p>Note : If you want Reciver to know about courier , enter reciver email.If not you can skip it.</p>
        </div>
      </li>

      <li class="form-line" data-type="control_divider" id="id_71">
        <div id="cid_71" class="form-input-wide" data-layout="full">
          <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
        </div>
      </li>


        <li class="form-line" data-type="control_fullname" id="id_3">
            <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Choose service</label>
            <div id="cid_3" class="form-input-wide" data-layout="full">
                  <div data-wrapper-react="true" class="extended">

                  <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">

                  <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="package_type" id="normal" value="normal">
                        <label class="form-check-label" for="normal">Normal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="package_type" id="sameday" value="sameday">
                        <label class="form-check-label" for="sameday">Same day</label>
                    </div>
                </div>

                    
                    </span>
                   

                    
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
                    </span>

                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                    
                       

                    </span>
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                    </span>
                      
                                
                  </div>
            </div>
        </li>


        <li class="form-line" data-type="control_fullname" id="id_3">
            <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Package information</label>
            <div id="cid_3" class="form-input-wide" data-layout="full">
                <div data-wrapper-react="true" class="extended">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td width="35%">Package Type</td>
                                    <td width="35%">Weight(Kg)</td>
                                    <td width="35%">Quantity</td>
                                    <td width="35%">Description</td>
                                    <td width="35%">Area</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                     
                          <!-- HTML view where you want to display the total cost -->
                            <p id="totalCost"></p>
                            <div id="error-container" style="color: red;"></div> 
                            

                            </tfoot>
                        </table>
                    
                    </div>
                 
                </div>
                <br>
                <button id="calculateCostBtn" class="btn btn-primary" style="width:200px;">Calculate Delivery Cost</button>

            </div>
            
        </li>

      <li class="form-line" data-type="control_divider" id="id_71">
        <div id="cid_71" class="form-input-wide" data-layout="full">
          <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
        </div>
      </li>
      

      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Schedule Courier</label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
            <div data-wrapper-react="true" class="extended">
                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                
                        <div class="form-group">
                            <label for="pickupDate">Pickup Date</label>
                            <input type="date" class="form-control @error('pickupDate') is-invalid @enderror" id="pickupDate" name="pickupDate">
                            @error('pickupDate')
                                  <div style="color:red" id="pickupDate">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    </span>

                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
                    </span>

                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                    
                        <div class="form-group">
                            <label for="pickupTime">Pickup Time</label>
                            <input type="time" class="form-control @error('pickupTime') is-invalid @enderror" id="pickupTime" name="pickupTime">
                            @error('pickupTime')
                                  <div style="color:red" id="pickupTime">{{ $message }}</div>
                            @enderror
                        </div>

                    </span>
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                    </span>
                </div>
            </div>
      </li>

        <li class="form-line" data-type="control_divider" id="id_71">
            <div id="cid_71" class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
            </div>
        </li>

        <li class="form-line" data-type="control_fullname" id="id_3">
            <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Payment</label>
            <div id="cid_3" class="form-input-wide" data-layout="full">
                <div data-wrapper-react="true" class="extended">
                    <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                    
                        <select class="form-dropdown form-address-country @error('payment_type') is-invalid @enderror" name="payment_type" id="">
                            <option value="">Type</option>
                            <option value="">Cash</option>
                            <option value="">Card</option>
                        </select>
                        @error('payment_type')
                              <div style="color:red" id="payment_type">{{ $message }}</div>
                        @enderror
                        
                        </span>
                        

                        <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
                        </span>

                        <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">

                        <select class="form-dropdown form-address-country @error('payment_by') is-invalid @enderror" name="payment_by" id="payment_by">
                            <option value="">Payment by</option>
                            <option value="">Sender</option>
                            <option value="">Reciver</option>
                        </select>
                        @error('payment_by')
                              <div style="color:red" id="payment_by">{{ $message }}</div>
                        @enderror
                    
                        </span>
                        <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                        </span>
                    </div>
                </div>
        </li>




        <li class="form-line" data-type="control_divider" id="id_71">
            <div id="cid_71" class="form-input-wide" data-layout="full">
            <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
            </div>
        </li>
        <li class="form-line" data-type="control_fullname" id="id_3">
            <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3" aria-hidden="false">Instructions</label>
            <div id="cid_3" class="form-input-wide" data-layout="full">
                <div data-wrapper-react="true" class="extended">
                    <ul type="disc">
                        <li>Details (sender's/receiver's name, address, mobile number) should be mentioned on the parcel and keep it ready</li>
                        <li>We do not accept perishable items, liquids, pets, fragile items & illegal products</li>
                        <li>Packages can be handed over to 24Express branches Office - Narahenpita on every weekday until 8.00 p.m.</li>
                        <li> Packages can be handed over to 24Express branches on every Saturday until 12.00 p.m.</li>

                        <li>Packaging materials can be purchased from 24Express branches - Narahenpita on every weekday until 6.00 p.m.</li>
                        
                    </ul>
                    
                </div>

            </div>
                   
        </li>

        

    
      

     
      


      
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button  type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField">Submit</button>
          </div>
        </div>
      </li>
      
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" type="hidden" /></li>
    </ul>
  </div>
</form>


<script>
    $(document).ready(function(){
        var count=1;

        dynamic_field(count);

        //This function will create dynamic input field
        function dynamic_field(number){
            var html = '<tr>';
            html += '<td><select class="form-dropdown" name="package_type[]" style="height: 30px;">';
            html += '<option value="">Select type</option>';
            html += '<option value="Sender">Sender</option>';
            html += '<option value="Receiver">Receiver</option>';
            html += '</select></td>';
            html += '<td><input type="number" name="package_weight[]" oninput="calculateTotalCost()" /></td>';

            html += '<td><input type="number" name="package_quantity[]"/></td>';
            html += '<td><input type ="textarea" name="package_description[]" /></td>';

            html += '<td><select class="form-dropdown" name="area[]" style="height: 30px;" onchange="calculateTotalCost()">';
            html += '<option value="">Select area</option>';
            html += '<option value="same_district">Within same district</option>';
            html += '<option value="outstation">Oustation</option>';
            html += '</select></td>';


            if(number > 1){
                html += '<td><button type="button" name="remove"  class="btn btn-danger">-</button></td>';
            }else{
                html +='<td><button  type="button" name="add" id="add" class="btn btn-success">+</button></td>';
            }

            html += '</tr>';
            $('tbody').append(html);
        }

        $(document).on('click', '#add', function(){
            count++;
            dynamic_field(count);
        });

        $(document).on('click', 'button[name="remove"]', function(){
            count--;
            $(this).closest('tr').remove();
        });
    });


    

    $(document).ready(function(){

    $('#calculateCostBtn').click(function(){
      event.preventDefault();
      document.getElementById('error-container').textContent = '';
        // Initialize an array to store package data
        var packages = [];

        // Loop through each package row in the table
        $('tbody tr').each(function(){
            // Retrieve values from input fields within the current row
            var weight = parseFloat($(this).find('input[name="package_weight[]"]').val());
            var quantity = parseInt($(this).find('input[name="package_quantity[]"]').val());
            var area = $(this).find('select[name="area[]"]').val(); // Retrieve selected area value

            // Push package data to the packages array
            packages.push({weight: weight, quantity: quantity,area:area});
        });



        // Serialize the packages array to JSON format
        var jsonData = JSON.stringify(packages);

        // Get the CSRF token value
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Send JSON data to the server using AJAX
        $.ajax({
            url: '/customer/calculate/delivery-cost',
            type: 'POST',
            contentType: 'application/json',
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
            },
            data: jsonData,
            success: function(response) {
                // Display the total calculated delivery cost returned from the server

                //$('#totalCost').text("Total delivery cost for all packages: $" + response.totalCost.toFixed(2));

                if (response.errors) {
                  // Display validation errors in the error container
                  var errorContainer = document.getElementById('error-container');

                  for (const [key, value] of Object.entries(response.errors)) {
                    errorContainer.innerHTML += value + '<br>';
                  }

                } else {
                  
                  // Handle the response data if no errors
                  document.getElementById('totalCost').innerHTML = 'Total Delivery Cost: ' + response.totalCost;
                  document.getElementById('area').innerHTML = 'Area : ' + response.message;
                }
                

                
           
                
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });
    });
});



      


</script>

</body>
</html>
