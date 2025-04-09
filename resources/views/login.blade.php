<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Staff Login</title>

    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="./assets/css/pages/auth-light.css" rel="stylesheet" />
    <style>
    .content {
        margin-top: 100px; 
    }
</style>
</head>

<body class="bg-silver-300">
    <div class="content">
        
        <div class="brand">
           <h1>24Express Company</h1>
        </div>
        <form id="login-form" action="/staff/dashboard" method="post">
        @csrf
            <h2 class="login-title">Staff Login</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password" autocomplete="off">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span></label>
                <a href="forgot_password.html"></a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Login</button>
            </div>
            
        </form>
    </div>
</body>

</html>