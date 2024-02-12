<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/shakur.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/salman.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tracking.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/msg.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/salman.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/findcourse.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/askgpt.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bsc.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/getstarted.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tips.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/application.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css')}}" />

    <script src="{{asset('https://kit.fontawesome.com/c6614d5790.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css')}}">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js')}}"></script>


    <title>Academy Frontend</title>
</head>
<body>
<header>
    <nav class="nav-section">
        <ul class="nav-list">
            <li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Programs & Courses</a></li>
            <li class="nav-item menu" id="toggleSubMenu"><a href="#" class="nav-linkss">Study Destination
                    <i class="fa-solid fa-caret-down"></i></a>
                <ul class="submenu">
                    @if(count($destinations) > 0)
                        @foreach($destinations as $destination)
                            <li class="sublink"><a href="{{route('destination.detail', $destination->id)}}" class="submenu-link"><img src="{{asset(optional($destination->country_info)->flag)}}" alt="">{{optional($destination->country_info)->name}}</a></li>
                        @endforeach

                    @endif

                </ul>
            </li>
            <li class="nav-item"><a href="{{route('resources')}}" class="nav-link">Resources</a></li>
            <li class="nav-item"><a href="{{route('faq')}}" class="nav-link">FAQ</a></li>
            {{--            <li class="nav-item"><a href="about.html#offer" class="nav-link">Services</a></li>--}}
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>

            <div class="buttons">
                <a href="#" class="login">Free Consultation</a>
            </div>
        </ul>

        <div id="menu-icon" class="nav-link">
            <i class="fa-solid fa-bars fa-lg"></i>
        </div>
    </nav>

    @auth
        <div class="second-nav">
            <img src="{{asset('assets/image/AncileAcad-logo.svg')}}" alt="">
            <div class="nav-profile">
                <i class="fa-solid fa-xmark iconn"></i>
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="input-box">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                <div class="nav-auth-profile">
                    <img src="{{asset('assets/image/message.svg')}}" class="message" />
                    <div class="nav-profile-details">
                        <img src="{{asset('assets/image/img11.jpg')}}" alt="" class="profile-img">
                        <div class="nav-profile-name">
                            <h3><h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3></h3>
                            <a href="{{route('logout')}}">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="second-nav">
            <a href="{{route('home')}}"><img src="{{asset('assets/image/AncileAcad-logo.svg')}}" alt=""></a>

            <div class="nav-profile">
                <i class="fa-solid fa-xmark iconn"></i>
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="input-box">
                        <form action="">
                            <input type="text" placeholder="Search...">
                            <button type="submit" class="searchh">Search</button>
                        </form>

                    </div>
                </div>
                <div class="nav-auth">
                    <a href="#" id="registered">SIGN UP</a>
                    <a href="#" id="logged">LOGIN</a>
                </div>
            </div>
        </div>

        @endauth
</header>
    @yield('content')
<footer>
    <div class="footer-box1">
        <div class="footer-quest">
            <img src="{{asset('assets/image/quest.svg')}}" />
            <h3>Questions?</h3>
            <h4>AskOurGPT</h4>
        </div>
        <div class="footer-quest">
            <img src="{{asset('assets/image/footer-signal.svg')}}" />
            <h3>Guide</h3>
            <h4>Available Counsellor</h4>
        </div>
    </div>
    <div class="read-container">
        <div class="read-link">
            <a href="#">Programs & Courses</a>
            <a href="#">Services</a>
            <a href="#">Resources</a>
            <a href="#">Blog</a>
        </div>
        <div class="read-social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
    <div class="footer-parag">
        <p class="parag-text">Ancile Academy is an educational travel consultancy creating a diverse range of
            opportunities that allows
            students to
            travel to their dream universities from students and parents to educators and institutions, while showcasing
            the value
            and impact of experiential learning through travel.</p>
        <p class="copy">2023 © Ancile Inc. All rights reserved.</p>
    </div>
</footer>

<div class="modal fade" id="play-video-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/kT8ch56mq6A?autoplay=1" frameborder="0"
                        allowfullscreen autoplay></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="play-video-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/kT8ch56mq6A?autoplay=1" frameborder="0"
                        allowfullscreen autoplay></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="play-video-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/kT8ch56mq6A?autoplay=1" frameborder="0"
                        allowfullscreen autoplay></iframe>
            </div>
        </div>
    </div>
</div>


<!-- consultation page............................ -->
<div id="consult">
    <a href="#" class="consult-link"><i class="fa-solid fa-xmark"></i></a>
    <h3 class="consult-head">START A FREE CONSULTATION</h3>
    <form action="#" class="consult-form">
        <div class="consult-details">
            <input type="text" name="fname" id="fname" placeholder="First name">
            <input type="text" name="lname" id="lname" placeholder="Last name">
        </div>
        <div class="consult-details">
            <input type="email" name="email" id="email" placeholder="Email address">
            <input type="tel" id="phone" type="tel" name="phone">
        </div>
        <div class="consult-select">
            <h4>Your intending study destination</h4>
            <select name="country" id="country">
                <option value="Select Country" disabled>Select Country</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Ghana">Ghana</option>
            </select>
        </div>
        <div class="consult-select">
            <h4>What level of study are you planning for?</h4>
            <select name="level" id="level">
                <option value="Select Level" disabled>Select education level</option>
                <option value="Nigeria">100level</option>
                <option value="Ghana">200level</option>
            </select>
        </div>
        <button type="submit">Submit Request</button>
    </form>

    <p class="consult-parag">As soon as your request is received, an expert will be assigned to see you through an
        advice stage.
        If need be a university counsellor will be in the process to guide you on right choices.</p>
</div>
<!-- Register............................ -->
<div id="register">
    <a href="#" class="consult-link reg-link"><i class="fa-solid fa-xmark"></i></a>
    <h3 class="reg-head">CREATE ACCOUNT</h3>
    <form action="#" class="consult-form">
        <div class="consult-details">
            <input type="text" name="firstname" id="firstname" placeholder="Enter First Name">
            <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name">
        </div>
        <div class="consult-details">
            <input type="email" name="mail" id="mail" placeholder="Enter Email Address">
            <input type="tel" id="phone2" name="phone">
        </div>
        <div class="consult-password">
            <div class="password-box">
                <input type="password" name="password" id="passwordField1" placeholder="Enter Password">
                <span class="toggle-password1" onclick="togglePasswordVisibility1()">
              <i class="fa-solid fa-eye" id="eyeIcon1"></i>
            </span>
            </div>
            <div class="password-box">
                <input type="password" name="cpassword" id="passwordField2" placeholder="Confirm Password">

                <span class="toggle-password2" onclick="togglePasswordVisibility2()">
              <i class="fa-solid fa-eye" id="eyeIcon2"></i>
            </span>
            </div>
        </div>
        <div class="reg-button">
            <button type="submit">Create Account</button>
            <div class="reg-already">
                <p>Already have an account? <span><a href="#" class="reg-login">Login</a></span></p>
            </div>
        </div>
    </form>

    <p class="consult-parag">By clicking, create account up you will be agreeing to our <a href="#">Terms &
            Conditions</a> & <a href="#">Privacy
            Policy</a></p>
</div>
<!-- Login............................ -->
<div id="login">
    <a href="#" class="consult-link login-link"><i class="fa-solid fa-xmark"></i></a>
    <h3 class="reg-head">LOGIN TO
        YOUR ACCOUNT</h3>
    <form action="#" class="consult-form">

        <div class="login-div">
            <label for="emaila">Email Address</label><br><br>
            <input type="email" id="emaila" name="emaila" placeholder="Enter Email Address">
        </div>

        <div class="login-div">
            <label for="passwordField">Password</label><br><br>
            <div class="login-divv">
                <input type="password" id="passwordField" name="passwordField" placeholder="Enter Password">
                <span class="toggle-password" onclick="togglePasswordVisibility()">
              <i class="fa-solid fa-eye" id="eyeIcon"></i>
            </span>
            </div>

        </div>
        <p class="forgot-p">Forgot password ? <span><a href="#">Reset</a></span></p>
        <button type="submit" class="loginGo">Login</button>
        <p class="forgot-p">Dont have account? <span><a href="#" class="login-reg">Sign Up</a></span></p>
    </form>

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

@extends('frontend.script')
<script>
    @yield('scripts')
</script>



<script>

</script>
</html>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>


    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
                style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();
            break;

        case 'success':
            Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
                style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();
            break;

        case 'warning':
            Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
                style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();
            break;

        case 'error':
            Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
                style: { background: "linear-gradient(to right, #ff0000, #ff0000)" }
            }).showToast();
            break;
    }
    @endif
</script>


</html>
