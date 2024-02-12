<footer>
    <div class="footer-box1">
        <div class="footer-quest">
            <img src="assets/image/quest.svg" />
            <h3>Questions?</h3>
            <h4>AskOurGPT</h4>
        </div>
        <div class="footer-quest">
            <img src="assets/image/footer-signal.svg" />
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
    <a href="#" class="consult-link" onclick="closedConsult(event)"><i class="fa-solid fa-xmark"></i></a>
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
    <a href="#" class="consult-link reg-link" onclick="closedReg(event)"><i class="fa-solid fa-xmark"></i></a>
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
                <p>Already have an account? <span><a href="#" class="reg-login" onclick="regToLogin(event)">Login</a></span>
                </p>
            </div>
        </div>
    </form>

    <p class="consult-parag">By clicking, create account up you will be agreeing to our <a href="#">Terms &
            Conditions</a> & <a href="#">Privacy
            Policy</a></p>
</div>
<!-- Login............................ -->
<div id="login">
    <a href="#" class="consult-link login-link" onclick="closedLogin(event)"><i class="fa-solid fa-xmark"></i></a>
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
        <p class="forgot-p">Dont have account? <span><a href="#" class="login-reg" onclick="loginToReg(event)">Sign
              Up</a></span></p>
    </form>

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function () {
        $(".place-container").slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
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
                },
            ],
        });

        const header = document.querySelector(".nav-section");
        const elements = document.querySelector(".nav-list");
        const menu = document.querySelectorAll(".nav-link, .sublink");
        const icon = document.querySelector("#menu-icon i");
        const consultBtn = document.querySelector('.login');

        menu.forEach((element) => {
            element.addEventListener("click", () => {
                elements.classList.toggle("active");
                icon.classList.toggle("active");
            });
        });

        consultBtn.addEventListener('click', toggleConsult);

        let searchBox = document.querySelector(".search-box .fa-solid.fa-magnifying-glass");
        let search = document.querySelector('.nav-profile');

        searchBox.addEventListener("click", () => {
            search.classList.toggle("showInput");
            toggleSearchIcon();
        });

        const switchBtn = document.querySelector('.home-btn');
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
            elements.style.paddingTop = window.matchMedia("(max-width: 75em)").matches ? '70px' : '0';
        });

        const exploreBtn = document.querySelector('.place-explore');
        const con = document.querySelector('.place-con');

        exploreBtn.addEventListener('click', function (e) {
            e.preventDefault();
            con.classList.remove('place-hide');
            exploreBtn.style.display = 'none';
        });

        const swiper = new Swiper(".mySwiper", {
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

        document.addEventListener("DOMContentLoaded", fetchCountries);

        const input = document.querySelector("#phone");
        initIntlTelInput(input, "ng");

        const input2 = document.querySelector("#phone2");
        initIntlTelInput(input2, "ng");

        const consult = document.getElementById('consult');
        const closeConsult = document.querySelector('.consult-link');
        consultBtn.addEventListener('click', toggleConsult);
        closeConsult.addEventListener('click', closedConsult);

        const registerBtn = document.getElementById('registered');
        const registerBox = document.getElementById('register');
        const closeReg = document.querySelector('.reg-link');
        const regLogin = document.querySelector('.reg-login');
        const loginReg = document.querySelector('.login-reg');
        const getStarted = document.querySelectorAll('.login2');

        registerBtn.addEventListener('click', toggleRegister);
        closeReg.addEventListener('click', closedReg);
        const loginBtn = document.getElementById('logged');
        const loginBox = document.getElementById('login');
        const closeLogin = document.querySelector('.login-link');

        loginBtn.addEventListener('click', toggleLogin);
        closeLogin.addEventListener('click', closedLogin);
        regLogin.addEventListener('click', regToLogin);
        loginReg.addEventListener('click', loginToReg);

        function toggleSearchIcon() {
            if (search.classList.contains("showInput")) {
                searchBox.classList.replace("fa-solid.fa-magnifying-glass", "fa-solid.fa-xmark");
            } else {
                searchBox.classList.replace("fa-solid.fa-xmark", "fa-solid.fa-magnifying-glass");
            }
        }

        function togglePasswordVisibility(elementId) {
            const passwordField = document.getElementById(elementId);
            const eyeIcon = document.getElementById(`eyeIcon${elementId.charAt(elementId.length - 1)}`);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }

        function fetchCountries() {
            fetch("https://restcountries.com/v3.1/all")
                .then((response) => response.json())
                .then((data) => {
                    const countrySelect = document.getElementById("country");

                    data.forEach((country) => {
                        const option = document.createElement("option");
                        option.value = country.name.common;
                        option.textContent = country.name.common;
                        countrySelect.appendChild(option);
                    });
                })
                .catch((error) => console.error("Error fetching countries:", error));
        }

        function initIntlTelInput(input, initialCountry) {
            const iti = window.intlTelInput(input, {
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
                initialCountry: initialCountry,
            });
        }

        function toggleConsult(e) {
            e.preventDefault()
            consult.classList.toggle('active');
        }

        function closedConsult(e) {
            e.preventDefault()
            consult.classList.toggle('active')
        }

        function toggleRegister(e) {
            e.preventDefault();
            registerBox.classList.toggle('active');
        }

        function closedReg(e) {
            e.preventDefault();
            registerBox.classList.remove('active');
        }

        function toggleLogin(e) {
            e.preventDefault();
            loginBox.classList.toggle('active');
        }

        function closedLogin(e) {
            e.preventDefault();
            loginBox.classList.remove('active');
        }

        function regToLogin(e) {
            e.preventDefault();
            registerBox.classList.remove('active');
            loginBox.classList.toggle('active');
        }

        function loginToReg(e) {
            e.preventDefault();
            registerBox.classList.toggle('active');
            loginBox.classList.remove('active');
        }
    });

</script>
</html>
