@extends('frontend.app')



@section('content')

<section>
    <div class="profile-links">
        <div class="profile-first">
            <a href="#" class="first-profile active-profile" data-target="#profile-box" data-toggle="tab">Profile</a>
            <a href="#" class="application-profile" data-target="#application-box" data-toggle="tab">Applications</a>
        </div>
        <div class="profile-btn">
            <a href="#"> <i class="fa-solid fa-plus"></i> New application</a>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="profile-box">
            <div class="profile-box">
                <div class="profile-container">
                    <div class="profile-name-details">
                        <img src="assets/image/img13.jpg" alt="">
                        <div class="profile-name-name">
                            <h3>Tyler Nixon</h3>
                            <p>Indian</p>
                        </div>
                    </div>
                    <div class="profile-container-auth">
                        <a href="#">Edit</a>
                    </div>
                </div>
                <div class="information-box">
                    <div class="information-header">
                        <h4>Personal Information</h4>
                        <a href="#" class="edit-information">Edit</a>
                    </div>
                    <div class="information-name">
                        <div class="information-fname">
                            <p>First Name</p>
                            <h5>Tyler</h5>
                        </div>
                        <div class="information-lname">
                            <p>Last Name</p>
                            <h5>Nixon</h5>
                        </div>
                    </div>
                    <div class="information-name">
                        <div class="information-fname">
                            <p>Email address</p>
                            <h5>tylernixon@gmai.com</h5>
                        </div>
                        <div class="information-lname">
                            <p>Phone Number</p>
                            <h5>+91 345 346 46</h5>
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
                            <div class="completed-list">
                                <div class="completed-list-name">
                                    <h4>Tyler Nixon</h4>
                                    <p>Created on 4 Dec. 2023</p>
                                </div>
                                <div class="completed-list-percent">
                                    <h3>75%</h3>
                                    <a href="#" class="edit">Edit</a>
                                    <a href="#" class="track">Track</a>
                                </div>
                            </div>
                            <div class="completed-list">
                                <div class="completed-list-name">
                                    <h4>Tyler Nixon</h4>
                                    <p>Created on 7 Jan. 2022</p>
                                </div>
                                <div class="completed-list-percent">
                                    <h3>55%</h3>
                                    <a href="#" class="edit">Edit</a>
                                    <a href="#" class="track">Track</a>
                                </div>
                            </div>
                            <div class="completed-list">
                                <div class="completed-list-name">
                                    <h4>Tyler Nixon</h4>
                                    <p>Created on 9 Dec. 2023</p>
                                </div>
                                <div class="completed-list-percent">
                                    <h3>25%</h3>
                                    <a href="#" class="edit">Edit</a>
                                    <a href="#" class="track">Track</a>
                                </div>
                            </div>

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


<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>


    const header = document.querySelector(".nav-section");
    const elements = document.querySelector(".nav-list");
    const menu = document.querySelectorAll(".nav-link");
    const sublink = document.querySelectorAll('.sublink')
    const icon = document.querySelector("#menu-icon i");
    const profileBtn = document.querySelector('.profile-btn')

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

    $(document).ready(function () {
        $('.profile-links a').on('click', function (e) {
            e.preventDefault();
            profileBtn.style.display = 'block'
            $('.profile-links a').removeClass('active-profile');
            $(this).addClass('active-profile');
            var target = $(this).data('target');
            $('.tab-pane').removeClass('show active');
            $(target).addClass('show active');
        });
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
</html>
@endsection
