<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="main/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content login-form">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="index.html">
                                        <img src="asset/images/f-logo.png" alt="">
                                    </a>
                                </div>
                                <h4 class="text-center mt-4">Log into Your Account</h4>
                                <form action="{{ route('register') }}" novalidate method="POST">
                                    @csrf
                                        <div class="form-group">
                                            <label class="text-label" for="name_2">Name:</label>
                                            <div class="input-group input-group-merge">
                                                <input id="name_2" type="text" name="name" required="" class="form-control form-control-prepended"
                                                    placeholder="Enter your fullname">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fa fa-user"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="text-label" for="email_2">Email Address:</label>
                                            <div class="input-group input-group-merge">
                                                <input id="email_2" type="email" name="email" required="" class="form-control form-control-prepended"
                                                    placeholder="Enter your email">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fa fa-envelope"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="text-label" for="password_2">Password:</label>
                                            <div class="input-group input-group-merge">
                                                <input id="password_2" type="password" name="password" required="" class="form-control form-control-prepended"
                                                    placeholder="Enter your password">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fa fa-key"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="text-label" for="password_2">Password:</label>
                                            <div class="input-group input-group-merge">
                                                <input id="password_2" type="password" name="password_confirmation" required="" class="form-control form-control-prepended"
                                                    placeholder="Repeat your password">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fa fa-key"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-5">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" checked="" class="custom-control-input" id="terms" />
                                                <label class="custom-control-label" for="terms">I accept <a href="#">Terms and
                                                        Conditions</a></label>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button class="btn btn-primary mb-2" type="submit">Create Account</button><br>
                                            <a class="text-body text-underline" href="/admin">Have an account? Login</a>
                                        </div>

                                    </form>
                                <div class="text-center">
                                    <h5 class="mb-5">Or with Login</h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()"
                                                class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()"
                                                class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()"
                                                class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item m-t-10"><a href="javascript:void()"
                                                class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                    <p class="mt-5">Dont have an account? <a href="javascript:void()">Register Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="asset/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="main/js/custom.min.js"></script>
    <script src="main/js/settings.js"></script>
    <script src="main/js/gleek.js"></script>
</body>

</html>
