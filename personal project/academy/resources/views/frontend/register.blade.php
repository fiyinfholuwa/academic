<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academy Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/js/index.js')}}"></script>
</head>
<body>
<section class="login">
    <div class="row">
        <div class="col-lg-6 col-md-12 left">
            <div class="nav_top">
                <div class="nav_nav"><span>Programs & Courses</span> <span>Study Destination</span></div>
            </div>
            <div class="login_logo">
                <img src="{{asset('assets/image/AncileAcad-logo.svg')}}" />
            </div>
            <div class="login_left_text">
                <h3>
                    Explore <br />
                    Boundless <br />
                    Horizons
                </h3>
                <p>Your Gateway to Global Education Opportunities</p>
                <div class="btn_wrap">
                    <a href="">Get started</a>
                </div>
            </div>
            <div class="bg_bottom">

            </div>
        </div>
        <div class="col-lg-6 col-md-12 right">
            <div class="wrap_times">
                <a href="{{route('home')}}"><img src="{{asset('assets/image/close-aa.svg')}}" /></a>
            </div>
            <div>
                <h3>CREATE ACCOUNT</h3>
                <form class="register" action="{{route('register')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mt-4">
                                <!-- <label>First Name</label> -->
                                <input value="{{old('first_name')}}" name="first_name" type="text" class="form-control" placeholder="Enter First Name" />
                            </div>
                            <p style="color:red">
                                @error('first_name')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group">
                                <!-- <label>Last Name</label> -->
                                <input value="{{old('last_name')}}" name="last_name" type="text" class="form-control" placeholder="Enter Last Name" />
                            </div>
                            <p style="color:red">
                                @error('last_name')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group">
                                <!-- <label>Email Address</label> -->
                                <input value="{{old('email')}}" name="email" type="text" class="form-control" placeholder="Enter Email Address" />
                            </div>
                            <p style="color:red">
                                @error('email')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group">
                                <!-- <label>Mobile Number</label> -->
                                <input value="{{old('phone')}}" type="number" id="phone" placeholder="Input Mobile Number" name="phone" class="form-control">
                            </div>
                            <p style="color:red">
                                @error('phone')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group password-container">
                                <!-- <label>Password</label> -->
                                <input name="password" id="passwordField1" type="password" class="form-control"
                                       placeholder="Enter Password" />
                                <span class="toggle-password1" onclick="togglePasswordVisibility1()">
                                            <i class="fa fa-eye" id="eyeIcon1"></i>
                                        </span>
                            </div>

                            <p style="color:red">
                                @error('password')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group password-container">
                                <!-- <label>Password Confirmation</label> -->
                                <input name="password_confirmation"  id="passwordField2" type="password" class="form-control"
                                       placeholder="Enter Password Confirmation" />
                                <span class="toggle-password2" onclick="togglePasswordVisibility2()">
                                            <i class="fa fa-eye" id="eyeIcon2"></i>
                                        </span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <button class="btn_submit" type="submit">Create Account</button>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h6 id="register_forgot">Already have an account? <a href="login.html">Login</a>
                            </h6>
                        </div>
                    </div>



                    <h6 id="term_condition">By clicking, create account up you will be agreeing to our <a>Terms
                            & Conditions</a> & <a>Privacy Policy</a></h6>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
