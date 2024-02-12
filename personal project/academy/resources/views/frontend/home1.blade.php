@extends('frontend.app')

@section('content')

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero">
                    <div class="hero-text">
                        <h1>Explore Boundless Horizons</h1>
                        <p>Your Gateway to Global Education Opportunities</p>
                        <div class="hero-buttons">
                            <a href="#" class="login2">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-img">
                        <img src="assets/image/home-header.png" alt="hero-image" class="her-img">
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
                            <a href="#" class="login2">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-img">
                        <img src="assets/image/home-header.png" alt="hero-image" class="her-img">
                    </div>
                    <!-- <img src="assets/image/home-header.png" alt="hero-image" class="hero-img"> -->
                </div>
            </div>
        </div>
    </div>
    </header>
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
                    <a href="{{route('consultation')}}" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
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
                <a href="#">Explore More</a>
            </div>

        </div>
    </section>

    <section>
        <div class="home-box">
            <div class="home">
                <div class="home-text">
                    <img src="{{asset('assets/image/study-ic.svg')}}" alt="">
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const steps = document.querySelectorAll(".step");

            function updateProgress() {
                let currentStep = 0;

                setInterval(() => {
                    steps.forEach((step) => {
                        step.classList.remove("active");
                    });

                    if (currentStep < steps.length) {
                        steps[currentStep].classList.add("active");
                        currentStep++;
                    } else {
                        clearInterval();
                    }
                }, 2000); // Adjust the duration as needed (in milliseconds)
            }

            updateProgress(); // Start the progress update
        });

    </script>
@endsection
