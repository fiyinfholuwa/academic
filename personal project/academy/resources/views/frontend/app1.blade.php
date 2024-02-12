<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/resources.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shakur.css')}}">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css')}}">
    <script src="{{asset('https://kit.fontawesome.com/c6614d5790.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('https://unpkg.com/scrollreveal')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css')}}" >

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
            <a href="{{route('profile')}}"><img src="{{asset('assets/image/img11.jpg')}}" alt="" class="profile-img"></a>
            <div class="nav-profile-name">
              <h3>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h3>
              <a href="{{route('logout')}}">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @else
        <div class="second-nav">
            <img src="{{asset('assets/image/AncileAcad-logo.svg')}}" alt="">
            <div class="nav-profile">
                <i class="fa-solid fa-xmark iconn"></i>
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="input-box">
                        <form action=""><input type="text" placeholder="Search..."></form>
                    </div>
                </div>
                <div class="nav-auth">
                    <a id="registered" href="#!">SIGN UP</a>
                    <a id="logged" href="#!">LOGIN</a>
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
            <a href="{{route('courses')}}">Programs & Courses</a>
            <a href="#">Services</a>
            <a href="{{route('resources')}}">Resources</a>
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

<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
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

    const header = document.querySelector(".nav-section");
    const elements = document.querySelector(".nav-list");
    const menu = document.querySelectorAll(".nav-link");
    const sublink = document.querySelectorAll('.sublink')
    const icon = document.querySelector("#menu-icon i");

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

    const switchBtn = document.querySelector('.home-btn')
    const see = document.getElementById("see");
    const start = document.getElementById("start");
    const homeText = document.querySelector(".home-text");
    const stepItem = document.querySelector(".step-item");

    switchBtn.addEventListener("click", function () {
        if (event.target.id === "see")
            event.preventDefault();

        homeText.style.display = "none";
        stepItem.style.display = "block";
        start.style.display = 'inline-block';
        see.style.display = 'none'
    });

    document.getElementById('toggleSubMenu').addEventListener('click', function () {
        document.querySelector('.submenu').classList.toggle('active');
        if (window.matchMedia("(max-width: 75em)").matches) {
            elements.style.paddingTop = '70px';
        } else {
            elements.style.paddingTop = '0';
        }
    });

    // Assuming you have the appropriate HTML structure with the necessary class names
    const exploreBtn = document.querySelector('.place-explore');
    const con = document.querySelector('.place-con');

    exploreBtn.addEventListener('click', function (e) {
        e.preventDefault();
        con.classList.remove('place-hide');
        exploreBtn.style.display = 'none';
    });


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

    document.getElementById('toggleSubMenu').addEventListener('click', function () {
        document.querySelector('.submenu').classList.toggle('active');
        if (window.matchMedia("(max-width: 75em)").matches) {
            elements.style.paddingTop = '70px';
        } else {
            elements.style.paddingTop = '0';
        }
    });
</script>

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
