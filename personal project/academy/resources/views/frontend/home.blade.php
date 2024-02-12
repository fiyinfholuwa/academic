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
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero">
                    <div class="hero-text">
                        <h1>Explore Boundless Horizons</h1>
                        <p>Your Gateway to Global Education Opportunities</p>
                        <div class="hero-buttons">
                            <a href="#" class="login2" onclick="toggleRegister(event)">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-img">
                        <img src="{{asset('assets/image/home-header.png')}}" alt="hero-image" class="her-img">
                    </div>
                    <!-- <img src="assets/image/home-header.png" alt="hero-image" class="hero-img"> -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero">
                    <div class="hero-text">
                        <h1>Discover Limitless Horizons</h1>
                        <p>Your Gateway to Global Education Opportunities</p>
                        <div class="hero-buttons">
                            <a href="#" class="login2" onclick="toggleRegister(event)">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-img">
                        <img src="{{asset('assets/image/home-header.png')}}" alt="hero-image" class="her-img">
                    </div>
                    <!-- <img src="assets/image/home-header.png" alt="hero-image" class="hero-img"> -->
                </div>
            </div>
        </div>
    </div>


<section id="help">
    <div class="help">
        <h2>We help students get admission into amazing universities around the world.</h2>
        <div class="help-container">
            <div class="help-box study">
                <p class="explore">Explore
                    Programs,
                    Study
                    Abroad</p>
                <a href="{{route('courses')}}" class="find">Find a course</a>
            </div>
            <div class="help-box">
                <img src="{{asset('assets/image/application.svg')}}" alt="">
                <p class="start">Start <br> Your Application</p>
                <a href="{{route('user.login')}}" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="help-box">
                <img src="{{asset('assets/image/consult.svg')}}" alt="">
                <p class="start">Get Free<br>
                    Consultation</p>
                <a  class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gain">
        <h2>Gain access to a vast network of reputable educational institutions and travel partners around the world.
        </h2>
        <p class="tag">Popular</p>
        <div class="destination">
            <div class="destination-header">
                <h3>Study
                    Destinations</h3>
            </div>
            <div class="destination-para">
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its
                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                opposed to using
                Content here, content here
            </div>
        </div>
        <!-- <div class="place-container">
          <div class="place-box">
            <img src="assets/image/Mask Group 57.jpg" alt="">
            <div class="place-number">
              <h5>01</h5>
              <p>United States</p>
            </div>
          </div>
          <div class="place-box">
            <img src="assets/image/Mask Group 60.jpg" alt="">
            <div class="place-number">
              <h5>02</h5>
              <p>Canada</p>
            </div>
          </div>
          <div class="place-box">
            <img src="assets/image/Mask Group 58.jpg" alt="">
            <div class="place-number">
              <h5>03</h5>
              <p>Australia</p>
            </div>
          </div>
          <div class="place-box">
            <img src="assets/image/Mask Group 59.jpg" alt="">
            <div class="place-number">
              <h5>05</h5>
              <p>United Kingdom</p>
            </div>
          </div>
          <div class="place-box">
            <img src="assets/image/Mask Group 58.jpg" alt="">
            <div class="place-number">
              <h5>06</h5>
              <p>Australia</p>
            </div>
          </div>
        </div> -->
        @if(count($destinations) > 0)
            <div class="place-containerr">
                @php
                    $i = 1;
                @endphp
                @foreach($destinations as $destination)

                    <a href="{{route('destination.detail', $destination->id)}}" style="background-image: url('{{asset($destination->image)}}');" class="place-boxx">
                        <div>
                            <div class="place-numberr">
                                <h5>{{$i++}}</h5>
                                <p>{{optional($destination->country_info)->name}}</p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        @endif

        <div class="place-containerr place-con place-hide">
            <a href="#" class="place-boxx">
                <div>
                    <!-- <img src="assets/image/Mask Group 57.jpg" alt=""> -->
                    <div class="place-numberr">
                        <h5>04</h5>
                        <p>Island</p>
                    </div>
                </div>
            </a>
            <a href="#" class="place-boxx">
                <div>
                    <!-- <img src="assets/image/Mask Group 57.jpg" alt=""> -->
                    <div class="place-numberr">
                        <h5>05</h5>
                        <p>United Kingdom</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="place-explore">
            <button type="submit">Explore More</button>
        </div>

    </div>
</section>
<section>
    <div class="home-box">
        <div class="home">
            <div class="home-text">
                <img src="assets/image/study-ic.svg" alt="">
                <h3>
                    Your Next
                    Home Could
                    Be Abroad
                </h3>
            </div>

            <ul class="step-item">
                <li class="active">
                    <p>Upload your qualifications &
                        other documents</p>
                </li>
                <li>
                    <h5>Counsellor Advise
                    </h5>
                    <p>On the best for your career path.</p>
                </li>
                <li>
                    <h5>Application Starts</h5>
                    <p>Based on your choice of universities.</p>
                </li>
                <li>
                    <h5>Successful!</h5>
                    <p>We assist with your Visa process.</p>

                </li>
            </ul>
            <div class="home-btn">
                <a href="#" id="see">See the Steps</a>
                <a href="{{route('user.application')}}" id="start">Start application</a>
            </div>
        </div>
        <div class="home-image-box">
            <!-- <img src="assets/image/study-img.jpg" alt="" class="home-img"> -->
        </div>

    </div>
</section>

<div class="image-background">
    <img src="{{asset('assets/image/imagee.jpg')}}" alt="">
</div>

@if(count($testimonials) > 0)
    <section>
        <div class="testimonial-container">
            <h2>Our Student’s Stories</h2>
            <div class="testimonial-box">
                @foreach($testimonials as $test)
                    <div class="testimonial">
                        <img src="{{asset($test->image)}}" alt="" class="testimonial-img">
                        <img src="{{asset('assets/image/play.svg')}}" alt="" class="play-btn" data-bs-toggle="modal"
                             data-bs-target="#play-video-{{$test->id}}">
                        <h3>{{$test->full_name}}</h3>
                        <div class="testimony-profile">
                            <img src="{{asset(optional($test->country_info)->flag)}}" class="testy-img" /> <span>{{optional($test->country_info)->name}}</span>
                        </div>
                    </div>
                    <div class="modal fade" id="play-video-{{$test->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <iframe width="100%" height="500" src="{{$test->link}}" frameborder="0"
                                            allowfullscreen autoplay></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endif


<section>
    <div class="course-container">
        <h2>Popular Course</h2>
        @php
            $courses = $course_category;
            $courses = json_decode($course_category, true);
            $accounting = collect($courses)->firstWhere('course_code', 'accounting');
            $engineering = collect($courses)->firstWhere('course_code', 'engineering');
            $computer = collect($courses)->firstWhere('course_code', 'computer');
            $health = collect($courses)->firstWhere('course_code', 'health');
            $language = collect($courses)->firstWhere('course_code', 'language');
            $education = collect($courses)->firstWhere('course_code', 'education');
            $art = collect($courses)->firstWhere('course_code', 'art');
            $law = collect($courses)->firstWhere('course_code', 'law');
            $media= collect($courses)->firstWhere('course_code', 'media');
        @endphp

        <div class="course-box">
            <div class="course">
                <a href="{{route('courses.category',$accounting['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/accounting.svg')}}" alt="">
                    {{$accounting['course_name']}}
                </a>
            </div>
            <div class="course">
                <a href="{{route('courses.category',$engineering['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/engineering.svg')}}" alt="">
                    {{$engineering['course_name']}}
                </a>
            </div>
            <div class="course">
                <a href="{{route('courses.category',$computer['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/computer.svg')}}" alt="">
                    {{$computer['course_name']}}
                </a>
            </div>
        </div>

        <div class="course-box">
            <div class="course">
                <a href="{{route('courses.category',$health['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/medical.svg')}}" alt="">
                    {{$health['course_name']}}
                </a>
            </div>
            <div class="course">
                <a href="{{route('courses.category',$language['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/language.svg')}}" alt="">
                    {{$language['course_name']}}
                </a>
            </div>
            <div class="course">
                <a href="{{route('courses.category',$education['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/education.svg')}}" alt="">
                    {{$education['course_name']}}
                </a>
            </div>
        </div>

        <div class="course-box">
            <div class="course">
                <a href="{{route('courses.category',$law['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/law.svg')}}" alt="">
                    {{$law['course_name']}}
                </a>
            </div>
            <div class="course">
                <a href="{{route('courses.category',$art['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/art.svg')}}" alt="">
                    {{$art['course_name']}}
                </a>
            </div>
            <div class="course">
                <a href="{{route('courses.category',$media['course_code'])}}">
                    <img src="{{asset('assets/image/Courses/marketing.svg')}}" alt="">
                    {{$media['course_name']}}
                </a>
            </div>
        </div>
    </div>
</section>


@include('frontend.common_footer')
<!-- consultation page............................ -->
@include('frontend.common_extra_modal')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

<script>

    $(".place-container").slick({
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                },
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },],
    });


    const exploreBtn = document.querySelector('.place-explore')
    const con = document.querySelector('.place-con')

    exploreBtn.addEventListener('click', function (e) {
        e.preventDefault()
        con.classList.remove('place-hide')
        exploreBtn.style.display = 'none'
    })

    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


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

