<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="hero_area">

        @include('Customer.header')

        <div class="form">
            <form method="get" class="form" action="/customer/login-check">
                @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
                @endif

                @if ($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
                @endif
                @csrf
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                </div>
                <button type="submit">Login</button>
                <p class="message">Don't have an account? <a href="/customer/register" id="registerLink">Register</a></p>
            </form>
        </div>
    </div>

    @include('Customer.footer')

</body>

</html>
