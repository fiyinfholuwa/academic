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
                <img src="{{asset('assets/image/AncileAcad-logo.svg')}}"/>
            </div>
            <div class="login_left_text">
                <h3>
                    Explore <br/>
                    Boundless  <br/>
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
        <div class="col-lg-6 col-md- right">
            <div class="wrap_times">
                <a href="{{route('home')}}"><img src="{{asset('assets/image/close-aa.svg')}}"/></a>
            </div>
            <div>
                <h3>LOGIN TO </br>YOUR ACCOUNT</h3>
                <form autocomplete="off" method="post" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email Address"/>
                    </div>

                    <div class="form-group mt-3 password-container">
                        <label>Password</label>
                        <input id="passwordField" name="password" type="password" class="form-control" placeholder="Enter Password"/>
                        <span class="toggle-password" onclick="togglePasswordVisibility()">
                                <i class="fa fa-eye" id="eyeIcon"></i>
                              </span>
                    </div>

                    <h6 id="login_forgot">Forgot password ? <a href="">Reset</a></h6>

                    <button class="btn_submit"  type="submit">Login</button>
                    <h6 id="sign_up">Dont have account? <a href="{{route('user.register')}}">Sign Up</a></h6>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
