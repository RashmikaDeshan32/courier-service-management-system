<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Calculator</title>
    <link rel="stylesheet" href="/user_2/css/calculator_style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<style>
    .calculate-btn {
        text-decoration: none;
    }
</style>
<body>

<button onclick="openModal()">Open Shipping Calculator</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Shipping Calculator</h2>

    <div class="input-container">
        <label for="from">From:</label>
        
        <select id="from" name="from">
            <option value="">Select</option>
            @foreach ($districts as $district)
            <option value="{{ $district->id }}">{{$district->name}}</option>
            @endforeach
            

        </select>
    </div>
    <div class="input-container">
        <label for="to">To:</label>

        <select id="to" name="to">
            <option value="">Select</option>
            @foreach ($districts as $district)
            <option value="{{ $district->id }}">{{$district->name}}</option>
            @endforeach
          
        </select>
    </div>
    <div class="input-container">
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" min="0" step="0.1">
    </div>
    <button onclick="calculateDeliveryCost()" class="calculate-btn">Calculate Delivery Cost</button>
    <br>
    <br>
   
    <div id="area"></div>
    <br>

    <div id="total-cost"></div>
  
    <div id="error-container" style="color: red;"></div> 
  </div>
</div>

<script>
    function openModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    function calculateDeliveryCost() {
        
        //This is div tag to display error
        document.getElementById('error-container').textContent = '';

        
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Get the selected "From" and "To" district IDs
        var fromDistrictId = document.getElementById('from').value;
        var toDistrictId = document.getElementById('to').value;

        // Get the weight input value
        var weight = document.getElementById('weight').value;

        // Make an HTTP POST request to the backend endpoint
        fetch('/customer/check-area', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
            },
            body: JSON.stringify({
                from_district_id: fromDistrictId,
                to_district_id: toDistrictId,
                weight: weight
            })
        })
        .then(response => response.json())
        
        .then(data => {
            // Check if there are validation errors
            if (data.errors) {
                // Display validation errors in the error container
                var errorContainer = document.getElementById('error-container');
                for (const [key, value] of Object.entries(data.errors)) {
                    errorContainer.innerHTML += value + '<br>';
                }
            } else {
                // Handle the response data if no errors
                document.getElementById('total-cost').innerHTML = 'Total Delivery Cost: ' + data.total_cost;
                document.getElementById('area').innerHTML = 'Area : ' + data.message;
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    

    





</script>

</body>
</html>
