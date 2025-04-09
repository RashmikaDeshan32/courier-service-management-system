<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user_2/css/customer_bashboard.css">
    <style>
        
    .container{
        margin-top:200px;
    }
    </style>
</head>
<body>
    @include('Customer.header')

    <div class="container">
        <h2>Dashboard</h2>
        <div class="grid">
            <div class="card">
                <h3>Total Pickup Orders</h3>
                <p>Total Sales: $1000</p>
                <p>Today's Sales: $100</p>
            </div>
            <div class="card">
                <h3>Total Delivery</h3>
                <p>Total Orders: 50</p>
                <p>Pending Orders: 5</p>
            </div>
            <div class="card">
                <h3>Collected</h3>
                <p>Total Products: 100</p>
                <p>New Products: 10</p>
            </div>
            <div class="card">
                <h3>Dispatched to branch</h3>
                <p>Total Customers: 200</p>
                <p>New Customers: 20</p>
            </div>
            <div class="card">
                <h3>Returned</h3>
                <p>Total Customers: 200</p>
                <p>New Customers: 20</p>
            </div>
            <div class="card">
                <h3>Processing</h3>
                <p>Total Customers: 200</p>
                <p>New Customers: 20</p>
            </div>
            <div class="card">
                <h3>Out for delivery</h3>
                <p>Total Customers: 200</p>
                <p>New Customers: 20</p>
            </div>
            <div class="card">
                <h3>Resheduled</h3>
                <p>Total Customers: 200</p>
                <p>New Customers: 20</p>
            </div>

            <!-- Additional boxes with modals -->
            <div class="box box-blue" data-toggle="modal" data-target="#newOrderModal">
                Add New Order
            </div>
            <div class="box box-green" data-toggle="modal" data-target="#newOrderModal">
                Add inquiry
            </div>
            <div class="box box-red" data-toggle="modal" data-target="#orderSummaryModal">
                Manage account
            </div>
            <div class="box box-green" data-toggle="modal" data-target="#orderSummaryModal">
                Print lable
            </div>


            <div class="box box-blue">
                View Order
            </div>
            <div class="box box-green">
                View inquiry
            </div>
            <div class="box box-red">
                View offers
            </div>
        </div>
    </div>

    <!-- New Order Modal -->
    <div class="modal fade" id="newOrderModal" tabindex="-1" role="dialog" aria-labelledby="newOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  
                </button>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: 80vh;">
                <!-- Form for adding new order -->
                <form>
                    <!-- Sender Information -->
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Sender Information</h5>
                            <div class="form-group">
                                <label for="senderName">Name</label>
                                <input type="text" class="form-control" id="senderName" placeholder="Enter sender's name">
                            </div>
                            <div class="form-group">
                                <label for="senderAddress">Address</label>
                                <input type="text" class="form-control" id="senderAddress" placeholder="Enter sender's address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Receiver Information</h5>
                            <div class="form-group">
                                <label for="receiverName">Name</label>
                                <input type="text" class="form-control" id="receiverName" placeholder="Enter receiver's name">
                            </div>
                            <div class="form-group">
                                <label for="receiverAddress">Address</label>
                                <input type="text" class="form-control" id="receiverAddress" placeholder="Enter receiver's address">
                            </div>
                        </div>
                    </div>
                    <!-- Package Information -->
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Package Information</h5>
                            <div class="form-group">
                                <label for="packageName">Name</label>
                                <input type="text" class="form-control" id="packageName" placeholder="Enter package name">
                            </div>
                            <div class="form-group">
                                <label for="packageWeight">Weight</label>
                                <input type="number" class="form-control" id="packageWeight" placeholder="Enter package weight">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Other Information</h5>
                            <div class="form-group">
                                <label for="packageType">Type</label>
                                <select class="form-control" id="packageType">
                                    <option>Document</option>
                                    <option>Parcel</option>
                                    <option>Box</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deliveryDate">Delivery Date</label>
                                <input type="date" class="form-control" id="deliveryDate">
                            </div>
                        </div>
                    </div>
                     <!-- Package Information -->
                     <div class="row">
                        <div class="col-md-6">
                            <h5>Package Information</h5>
                            <div class="form-group">
                                <label for="packageName">Name</label>
                                <input type="text" class="form-control" id="packageName" placeholder="Enter package name">
                            </div>
                            <div class="form-group">
                                <label for="packageWeight">Weight</label>
                                <input type="number" class="form-control" id="packageWeight" placeholder="Enter package weight">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Other Information</h5>
                            <div class="form-group">
                                <label for="packageType">Type</label>
                                <select class="form-control" id="packageType">
                                    <option>Document</option>
                                    <option>Parcel</option>
                                    <option>Box</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deliveryDate">Delivery Date</label>
                                <input type="date" class="form-control" id="deliveryDate">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mr-2">Add Order</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Order Summary Modal -->
    <div class="modal fade" id="orderSummaryModal" tabindex="-1" role="dialog" aria-labelledby="orderSummaryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderSummaryModalLabel">Order Summary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Table for displaying order summary -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Product A</td>
                                <td>2</td>
                                <td>$10</td>
                                <td>$20</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
