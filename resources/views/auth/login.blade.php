<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>WorkShopSolution</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #fff;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg-image.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            font-size: 15px;
        }

        .form-control,
        .form-control:focus,
        .input-group-text {
            border-color: #e1e1e1;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 400px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin-top: 0;
        }

        .signup-form hr {
            margin: 0 -30px 20px;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form label {
            font-weight: normal;
            font-size: 15px;
        }

        .signup-form .form-control {
            min-height: 38px;
            box-shadow: none !important;
        }

        .signup-form .input-group-addon {
            max-width: 42px;
            text-align: center;
        }

        .signup-form .btn,
        .signup-form .btn:active {
            font-size: 16px;
            font-weight: bold;
            background: #19aa8d !important;
            border: none;
            min-width: 140px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #224edf !important;
        }

        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #19aa8d;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }

        .signup-form .fa {
            font-size: 21px;
        }

        .signup-form .fa-paper-plane {
            font-size: 18px;
        }

        .signup-form .fa-check {
            color: #fff;
            left: 17px;
            top: 18px;
            font-size: 7px;
            position: absolute;
        }

    </style>
</head>

<body>
    <div class="signup-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Sign In</h2>
            <p>Please Enter your Email & Password for sign In!</p>
            <hr>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-paper-plane"></i>
                        </span>
                    </div>
                    <input type="email" placeholder="Email Address"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                        placeholder="Password" autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <label class="form-check-label">
                    <input type="checkbox" required="required" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
            </div>

            <div class="text-center"><a href="/forgotpassword">Forgot password ? </a></div>
        </form>
    </div>
        <p style="text-align: center;">OR</p>

        <div class="">

            <div class="col-md-4 offset-md-4">
                <a href="#" class="btn btn-primary btn-block" style="background: blue;">Login with Facebook</a>
                <a href="{{route('login.google')}}" class="btn btn-danger  btn-block" style="background-color: red;">Login with Google</a>
            </div>

        </div>
        <div class="text-center">New to this account? <a href="/register">Register here</a></div>
</body>

</html>
