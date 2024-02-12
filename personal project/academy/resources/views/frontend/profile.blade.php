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
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css')}}"/>

    <script src="{{asset('https://kit.fontawesome.com/c6614d5790.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet"
          href="{{asset('https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css')}}">
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
                            <li class="sublink"><a href="{{route('destination.detail', $destination->id)}}"
                                                   class="submenu-link"><img
                                        src="{{asset(optional($destination->country_info)->flag)}}"
                                        alt="">{{optional($destination->country_info)->name}}</a></li>
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
                    <img src="{{asset('assets/image/message.svg')}}" class="message"/>
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
<section>
    <div class="profile-links">
        <div class="profile-first">
            <a class="first-profile active-profile" data-target="#profile-box" data-toggle="tab">Profile</a>
            <a class="application-profile" data-target="#application-box" data-toggle="tab">Applications</a>
        </div>
        <div class="profile-btn">
            <a href="{{route('user.application')}}"><i class="fa-solid fa-plus"></i> New application</a>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="profile-box">
            <div class="profile-box">
                <div class="profile-container">
                    <div class="profile-name-details">
                        <img src="{{asset('assets/image/img13.jpg')}}" alt="">
                        <div class="profile-name-name">
                            <h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
                            <p>{{Auth::user()->address}}</p>
                        </div>
                    </div>
                    <div class="profile-container-auth">
                        <a id="modalBtn" class=" edit-information">Edit</a>
                    </div>
                </div>
                <div class="information-box">
                    <div class="information-header">
                        <h4>Personal Information</h4>
                        <a id="modalBtn" href="#" class="edit-information" >Edit</a>
                    </div>
                    <div class="information-name">
                        <div class="information-fname">
                            <p>First Name</p>
                            <h5>{{Auth::user()->first_name}}</h5>
                        </div>
                        <div class="information-lname">
                            <p>Last Name</p>
                            <h5>{{Auth::user()->last_name}}</h5>
                        </div>
                    </div>
                    <div class="information-name">
                        <div class="information-fname">
                            <p>Email address</p>
                            <h5>{{Auth::user()->email}}</h5>
                        </div>
                        <div class="information-lname">
                            <p>Phone Number</p>
                            <h5>{{Auth::user()->mobile}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="application-box">
            <div class="application-container">
                <div class="application-type">
                    <a href="#" class="all-app active" data-target=".all-content">All application</a>
                    <a href="#" class="completed-app" data-target=".completed-content">Completed</a>
                    <a href="#" class="cancel-app" data-target=".cancel-content">Canceled</a>
                </div>
                <div class="application-content">
                    <div class="all-content hide-content">
                        <div class="completed-content-div">
                            @if(count($applications) > 0)
                                @foreach($applications as $application)
                                    <div class="completed-list">
                                        <div class="completed-list-name">
                                            <h4>{{$application->full_name}}</h4>
                                            @php
                                                $inputDate = new DateTime($application->created_at);
                                                $datePart = $inputDate->format('Y-m-d');
                                                $outputDateString = 'Created on ' . DateTime::createFromFormat('Y-m-d', $datePart)->format('j M. Y');
                                            @endphp
                                            {{$outputDateString}}
                                        </div>

                                        <div class="completed-list-percent">
                                            @if(strtolower($application->status) =="pending")
                                                <h3>0%</h3>
                                            @elseif(strtolower(optional($application->status_name)->name) =="mentoring")
                                                <h3>20%</h3>
                                            @elseif(strtolower(optional($application->status_name)->name) =="payment")
                                                <h3>40%</h3>

                                            @elseif(strtolower(optional($application->status_name)->name) =="in review")
                                                <h3>60%</h3>

                                            @elseif(strtolower(optional($application->status_name)->name) =="confirmation")
                                                <h3>80%</h3>

                                            @elseif(strtolower(optional($application->status_name)->name) =="completed")
                                                <h3>100%</h3>

                                            @endif

                                            <a href="{{route('user.application.edit', $application->id)}}" class="edit">Edit</a>
                                            <a href="{{route('user.track', $application->id)}}"
                                               class="track_app">Track</a>
                                        </div>
                                    </div>
                                @endforeach

                            @else
                                <div class="all-content hide-content">
                                    <div class="all-content-div">
                                        <h2>No Application Created yet</h2>
                                        <a href="{{route('user.application')}}">Start an application</a>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="completed-content hide-content">
                        <h2>Welcome to the completed Content</h2>
                    </div>
                    <div class="cancel-content hide-content">
                        <h2>Welcome to cancel content</h2>

                    </div>
                </div>

            </div>
        </div>
    </div>


</section>

<div class="modal fade" id="display-profile1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div style="background-color: #0a53be" class="modal-content">

            <div class="modal-body">
                <h3>Update Profile</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter First Name">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('frontend.common_footer')
<!-- consultation page............................ -->
<!-- Add a modal structure -->
<div id="mainModal" class="modal_c modalToggle">
    <div class="modalBody">
        <div class="modalHeader">
            <h2>Update Profile <span onClick="closeFunction()" class="cross">&#10005;</span></h2>
        </div>
        <div class="modalContant">
            <form id="editForm">
                <div class="mb-3">
                    <label for="firstName" class="form-label label-name">First Name</label>
                    <input type="text" value="{{Auth::user()->first_name}}" class="form-control edit-input" id="firstName"
                           placeholder="Enter your first name">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label label-name">Last Name</label>
                    <input type="text" value="{{Auth::user()->last_name}}" class="form-control edit-input" id="lastName" placeholder="Enter your last name">
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label label-name">Email</label>
                    <input type="text" value="{{Auth::user()->email}}" class="form-control edit-input" readonly placeholder="Enter your email">
                </div>



                <div class="mb-3">
                    <label for="lastName" class="form-label label-name">Mobile Number</label>
                    <input type="text" class="form-control edit-input" value="{{Auth::user()->phone}}" placeholder="Enter your Mobile Number">
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label label-name">Profile Picture</label>
                    <input type="file" class="form-control edit-input"  placeholder="Enter your Mobile Number">
                </div>

                <button type="submit" class="btn btn-primary save-change">Save changes</button>
            </form>
        </div>
        <div class="modalFooter">
            <button onClick="closeFunction()" class="footerbtn cross"> Cancel</button>
        </div>
    </div>
</div>
<style>


    /* Modal Box */
    .modal_c {
        position: absolute;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        height: 100%;
        top: 0;
        left: 0;
        padding: 10px;
    }

    .modalBody {
        background-color: #fff;
        margin: 5rem auto;
        width: 769px;
        border-radius: 5px;
    }

    .modalHeader {
        padding: 1px 10px;
        border-bottom: 1px solid #ccc;
        padding: 10px;
    }

    .modalHeader span {
        float: right;
        font-size: 14px;
        padding-right: 5px;
    }

    .modalHeader span:hover {
        cursor: pointer;
    }

    .modalFooter {
        padding: 5px 10px;
    }

    .modalContant {
        padding: 5px 10px;
        border-bottom: 1px solid #ccc;
        width: 90%;
        margin: 5% auto;
    }

    .modalFooter {
        text-align: center;
    }

    .footerbtn {
        border: none;
        background-color: red;
        color: #fff;
        padding: 10px 20px;
        margin: 10px auto;
        border-radius: 5px;
    }

    .footerbtn:hover {
        outline: none;
        cursor: pointer;
        opacity: 0.8;
    }

    .footerbtn:visited {
        outline: none;
    }

    .modalToggle {
        display: none
    }

    @media screen and (max-width: 679px) {
        .modalBody {
            width: 95%;
            margin: 5rem auto;
        }
    }
</style>

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
    // document.getElementById("modalBtn").onclick = function () {
    //     clickFunction()
    // }
    // var showModal = document.getElementById("mainModal");
    //
    // function clickFunction() {
    //     // alert("btn click function");
    //     showModal.classList.remove("modalToggle");
    // }
    //
    //
    // function closeFunction() {
    //     // alert("close Button");
    //     showModal.classList.add("modalToggle");
    // }

    var modalBtns = document.querySelectorAll('[id^="modalBtn"]');

    // Attach the click event to each button
    modalBtns.forEach(function (btn) {
        btn.onclick = function () {
            toggleModal('mainModal');
        };
    });

    var mainModal = document.getElementById("mainModal");

    function toggleModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.classList.toggle("modalToggle");

        // Close the modal if the user clicks outside of it
        window.onclick = function (event) {
            if (event.target === modal) {
                toggleModal(modalId);
            }
        };
    }

    // Function to close the modal
    function closeFunction() {
        // Get the modal
        var modal = document.getElementById("mainModal");

        // Close the modal by adding the "modalToggle" class
        modal.classList.add("modalToggle");
    }
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

    // Handle click events on application links
    $('.application-type a').click(function (e) {
        e.preventDefault();
        // Remove 'active' class from all links
        $('.application-type a').removeClass('active');


        // Add 'active' class to the clicked link
        $(this).addClass('active');

        // Hide all content divs
        $('.hide-content').hide();
        // Show the corresponding content div based on the data-target attribute
        $($(this).data('target')).show();
    });


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
