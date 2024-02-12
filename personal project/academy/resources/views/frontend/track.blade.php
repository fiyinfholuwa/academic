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
    <link rel="stylesheet" href="{{asset('assets/css/resources.css')}}">

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
                        <form action="">
                            <input type="text" placeholder="Search...">
                            <button type="submit" class="searchh">Search</button>
                        </form>

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
<div class="application-header-box">
    <div class="application-header">
        <a href="{{route('profile')}}">
            > Back To Applications List</a>
    </div>
</div>

<section>
    <div class="track-app-support">
        <h3>Application Tracking</h3>
        <a href="#" class="track-link">
            <img src="{{asset('assets/image/support.svg')}}" alt=""> <span>Contact Support</span>
        </a>
    </div>
    <div class="msg-container track-contain">
        <div class="msg-text track-tracking">
            <h4 class="id-head">Application ID: 23453463</h4>
            <ul class="track">
                <li class="{{optional($application->status_name)->name == "mentoring" ||optional($application->status_name)->name == "payment" || optional($application->status_name)->name =="in review" || optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "active_status" : ""}} {{optional($application->status_name)->name == "mentoring" ||optional($application->status_name)->name == "payment" || optional($application->status_name)->name =="in review" || optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "done" : ""}}">
                    <p>Mentoring</p>
                </li>
                <li class="{{optional($application->status_name)->name == "payment" || optional($application->status_name)->name =="in review" || optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "active_status" : ""}}  {{optional($application->status_name)->name == "payment" || optional($application->status_name)->name =="in review" || optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "done" : ""}}  ">
                    <p>Payment</p>
                </li>
                <li class="{{optional($application->status_name)->name =="in review" || optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "active_status" : ""}} {{optional($application->status_name)->name =="in review" || optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "done" : ""}}">
                    <p>In Review</p>
                </li>
                <li class="{{optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "active_status" : ""}}  {{optional($application->status_name)->name =="confirmation" || optional($application->status_name)->name=="completed" ? "done" : ""}}">
                    <p>Confirmation</p>

                </li>
                <li class="{{optional($application->status_name)->name=="completed" ? "active_status" : ""}}  {{optional($application->status_name)->name=="completed" ? "done" : ""}}">
                    <p>Complete</p>
                </li>
            </ul>
        </div>
        @if($application->assigned_id == null)
            <div class="track-profile">
                <h4>Counsellor Assigned</h4>
                <img src="{{asset('assets/image/img11.jpg')}}" alt="" class="user-img">
                <h3>Not Assigned Yet</h3>
            </div>
        @else
            <div class="track-profile">
                <h4>Counsellor Assigned</h4>
                <img src="{{asset('assets/image/img11.jpg')}}" alt="" class="user-img">
                <h3>{{optional($application->counsellor_name)->first_name}}  {{optional($application->counsellor_name)->last_name}}</h3>
                {{--                    <p>ASUF University</p>--}}

                <a href="{{route('user.chat', $application->id)}}" class="profile-link">
                    Message
                </a>
            </div>
        @endif

    </div>
</section>
@include('frontend.common_footer')
<!-- consultation page............................ -->

<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@include('frontend.common_extra_modal')
</body>
<script>


    const header = document.querySelector(".nav-section");
    const elements = document.querySelector(".nav-list");
    const menu = document.querySelectorAll(".nav-link");
    const sublink = document.querySelectorAll('.sublink')
    const icon = document.querySelector("#menu-icon i");
    const consultBtn = document.querySelector('.login')

    menu.forEach((element) => {
        element.addEventListener("click", () => {
            elements.classList.toggle("active");
            icon.classList.toggle("active");
        });
    });
    sublink.forEach((element) => {
        element.addEventListener("click", () => {
            elements.classList.toggle("active");
            icon.classList.toggle("active");
        });
    });

    consultBtn.addEventListener('click', (e) => {
        e.preventDefault()
        elements.classList.toggle("active");
        icon.classList.toggle("active");
    })

    let searchBox = document.querySelector(".search-box .fa-solid.fa-magnifying-glass");
    let search = document.querySelector('.nav-profile')
    console.log(searchBox)
    searchBox.addEventListener("click", () => {
        search.classList.toggle("showInput");
        if (search.classList.contains("showInput")) {
            searchBox.classList.replace("fa-solid.fa-magnifying-glass", "fa-solid.fa-xmark");
        } else {
            searchBox.classList.replace("fa-solid.fa-xmark", "fa-solid.fa-magnifying-glass");
        }
    });
    document.getElementById('toggleSubMenu').addEventListener('click', function () {
        document.querySelector('.submenu').classList.toggle('active');
        if (window.matchMedia("(max-width: 75em)").matches) {
            elements.style.paddingTop = '70px';
        } else {
            elements.style.paddingTop = '0';
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Fetch countries from the Restcountries API
        fetch("https://restcountries.com/v3.1/all")
            .then((response) => response.json())
            .then((data) => {
                // Get the select element
                const countrySelect = document.getElementById("country");

                // Populate the dropdown with countries
                data.forEach((country) => {
                    const option = document.createElement("option");
                    option.value = country.name.common;
                    option.textContent = country.name.common;
                    countrySelect.appendChild(option);
                });
            })
            .catch((error) => console.error("Error fetching countries:", error));
    });
    // //////////////PLAYGROUND...................................
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
    });

    const iti = window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        initialCountry: "ng", // "ng" is the ISO country code for Nigeria
    });
    const input2 = document.querySelector("#phone2");
    window.intlTelInput(input2, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
    });

    const iti2 = window.intlTelInput(input2, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        initialCountry: "ng", // "ng" is the ISO country code for Nigeria
    });

    // CONSULTATION LOGIC
    const consult = document.getElementById('consult')
    const closeConsult = document.querySelector('.consult-link')
    consultBtn.addEventListener('click', (e) => {
        e.preventDefault()
        consult.classList.toggle('active');
    })

    closeConsult.addEventListener('click', (e) => {
        e.preventDefault()
        consult.classList.toggle('active')
    })

    // REGISTER LOGIC
    const registerBtn = document.getElementById('registered')
    const registerBox = document.getElementById('register')
    const closeReg = document.querySelector('.reg-link')
    const regLogin = document.querySelector('.reg-login')
    const loginReg = document.querySelector('.login-reg')
    const getStarted = document.querySelectorAll('.login2')
    registerBtn.addEventListener('click', (e) => {
        e.preventDefault()
        registerBox.classList.toggle('active');
    })
    closeReg.addEventListener('click', (e) => {
        e.preventDefault()
        registerBox.classList.toggle('active');
    })
    //LOGIN LOGIC
    const loginBtn = document.getElementById('logged')
    const loginBox = document.getElementById('login')
    const closeLogin = document.querySelector('.login-link')
    loginBtn.addEventListener('click', (e) => {
        e.preventDefault()
        loginBox.classList.toggle('active');
    })
    closeLogin.addEventListener('click', (e) => {
        e.preventDefault()
        loginBox.classList.toggle('active');
    })

    regLogin.addEventListener('click', (e) => {
        e.preventDefault()
        registerBox.classList.toggle('active');
        loginBox.classList.toggle('active');
    })
    loginReg.addEventListener('click', (e) => {
        e.preventDefault()
        registerBox.classList.toggle('active');
        loginBox.classList.toggle('active');
    })

    function togglePasswordVisibility() {
        var passwordField = document.getElementById("passwordField");
        var eyeIcon = document.getElementById("eyeIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }

    function togglePasswordVisibility1() {
        const passwordField = document.getElementById("passwordField1");
        const eyeIcon = document.getElementById("eyeIcon1");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }

    function togglePasswordVisibility2() {
        const passwordField = document.getElementById("passwordField2");
        const eyeIcon = document.getElementById("eyeIcon2");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }

</script>
</html>
