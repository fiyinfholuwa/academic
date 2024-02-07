@extends('frontend.app')



@section('content')

    <section>
        <div class="tips-container">
            <img src="{{asset($destination->image)}}" alt="" class="tips-banner">
            <div class="tips-download">
                <img src="{{asset('assets/image/pdf-ic.png')}}" alt="">
                <p>RunBook - {{optional($destination->country_info)->name}}</p>
                <img src="{{asset('assets/image/download.svg')}}" alt="">
                <a href="{{asset($destination->pdf)}}" download="">Download Resource</a>
            </div>
        </div>

        <div class="tips-process">
           {!! $destination->info !!}
        </div>
        <div class="tips-btn">
            <a href="#">Find out more, download the Australia RunBook</a>
        </div>
    </section>

    <section id="offer">
        <div class="offer-container">
            <div class="offer-header">
                <h2>What We Offer</h2>
                <p>At Ancile Academy, we provide comprehensive services tailored to each
                    student’s unique journey,</p>
            </div>
            <div class="offer-box">
                <div class="offer">
                    <p>University Selection and
                        Application Support</p>
                </div>
                <div class="offer">
                    <p>Visa Assistance</p>
                </div>
                <div class="offer">
                    <p>Test Preparation</p>
                </div>
            </div>
            <div class="offer-box">
                <div class="offer">
                    <p>Scholarship and
                        Financial Aid Information</p>
                </div>
                <div class="offer">
                    <p>Career Counselling</p>
                </div>
                <div class="offer">
                    <p>Student Mentoring</p>
                </div>
            </div>
        </div>
    </section>
    <section id="question">
        <div class="question-container">
            <div class="question-parag">
                <h3>Have a question?
                    Our team is happy
                    to assist you</h3>
                <p>Ask about universities, courses, programs or
                    Process. Our highly trained reps are
                    Standing by. Ready to help.</p>
                <div class="question-call">
                    <a href="#">Contact us</a>
                </div>
            </div>
            <img src="{{asset('assets/image/call-in.jpg')}}" alt="">
        </div>
    </section>
@endsection
