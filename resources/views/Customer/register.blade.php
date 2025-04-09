<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Register</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/user_2/css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="/user_2/css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="/user_2/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/user_2/css/responsive.css" rel="stylesheet" />

<style>

.sign  {
  padding-top: 200px; /* Adjust this value based on the height of the fixed header */
}

.section-title h2{
  text-align: center;
}
.section-title p{
  text-align: center;
}

</style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="/">
              <span>
                <img src="/user_2/images/24Express-logo-social.png" alt="">
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
           
              <span>
                Email :24express@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
               
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/pickup">Pickup request</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="about.html">Tracking</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.html">Branch network</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="service.html">Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.html">About us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Sign in</a>
                </li>
                
              </ul>
              
          </div>
          
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->




    <section id="signup" class="sign section-bg">
      <div class="container">

          <div class="section-title">
              <h2>SIGN UP</h2>
              <p>Please fill the following details for register with 24express Delivery.</p>
          </div>

          <div class="card-body">
              <div class="row">
                  <div class="col-lg-12">
                  <form method="post" role="form" id="signupForm" name="signupForm" action="/customer/create">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">First name</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="First name" value="{{ old('first_name') }}" />
                    @error('first_name')
                    <div style="color:red" id="first_name_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Repeat similar blocks for other form fields -->

            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">Last name</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="Last name" value="{{ old('last_name') }}" />
                    @error('last_name')
                    <div style="color:red" id="last_name_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">Mobile Number</label>
                </div>
                <div class="col-md-8 form-group">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">+94</span>
                        <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}" />
                    </div>
                    @error('mobile')
                    <div style="color:red" id="mobile_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">Street</label>
                </div>
                <div class="col-md-8 form-group">
                    <textarea class="form-control @error('street') is-invalid @enderror" name="street" id="street" rows="5" data-rule="required" placeholder="Street">{{ old('Street') }}</textarea>
                    @error('street')
                    <div style="color:red" id="street_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">City</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="email" placeholder="City" value="{{ old('city') }}" />
                    @error('city')
                    <div style="color:red" id="email_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">Postal Code</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" id="postal_code" placeholder="Postal Code" value="{{ old('postal_code') }}" />
                    @error('postal_code')
                    <div style="color:red" id="postal_code_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">E-mail</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" />
                    @error('email')
                    <div style="color:red" id="email_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">ID Number</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" id="id_number" placeholder="Your Email" value="{{ old('id_number') }}" />
                    @error('id_number')
                    <div style="color:red" id="email_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-4 form-group">
                    <label class="text-primery">Password</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Your Password" data-msg="Please enter password" />
                    @error('password')
                    <div style="color:red" id="password_error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button id="next" class="btn-block signupf" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>

                  </div>
              </div>
          </div>

      </div>
  </section>

    
  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <h4>
       24Express Delivery Service
      </h4>
      <p>Everyday is a new day for us and we work really hard to satisfy our customer everywhere.</p>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>
                      Location:
                      NO. 25,EPITAMULLA ROAD,KOTTE,SRI LANKA.
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>
                    0332525365
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>
                    24express@gmail.com
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>
 





  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> 
        <a href="https://html.design/"></a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script src="/user_2/js/jquery-3.4.1.min.js"></script>
  <script src="/user_2/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="/user_2/js/custom.js"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  <!--Image Slider-->
  <script src="/user_2/js/image_slider.js"></script>
  <!--Image Slider-->

</body>

</html>