@extends('frontend.app')



@section('content')
    <section>
        <div class="get-container">
            <div class="get-left">
                <a href="{{route('faq')}}">AskGPT > {{$ask_info->ask_name}}</a>
                <h2>{{$ask_info->ask_name}}</h2>

                @if(count($asks) > 0)
                    <div class="get-started">
                        @foreach($asks as $ask)
                            <div class="get-step">
                                <h3>{{$ask->question}}</h3>
                                <p>{{$ask->answer}}</p>
                            </div>

                        @endforeach

                    </div>
                @else
                <h3 style="margin-top: 100px" class="text-danger text-center">
                    No Result Found
                </h3>
                @endif

            </div>

            <div class="get-right">
                <h6>Next in step</h6>
                @if($ask_info->ask_code == "started")
                    <a href="{{route('ask.details', "benefit")}}">
                        <div class="get-benefit">
                            <img src="{{asset('assets/image/benefit.svg')}}" alt="">
                            <h5>Benefits</h5>
                        </div>
                    </a>
                @elseif($ask_info->ask_code =="benefit")
                    <a href="{{route('ask.details', "requirements")}}">
                        <div class="get-benefit">
                            <img src="{{asset('assets/image/reqr.svg')}}" alt="">
                            <h5>Requirements</h5>
                        </div>
                    </a>
                @elseif($ask_info->ask_code =="requirements")
                    <a href="{{route('ask.details', "eligibility")}}">
                        <div class="get-benefit">
                            <img src="{{asset('assets/image/elig.svg')}}" alt="">
                            <h5>Eligibility</h5>
                        </div>
                    </a>
                @elseif($ask_info->ask_code =="eligibility")
                    <a href="{{route('ask.details', "work")}}">
                        <div class="get-benefit">
                            <img src="{{asset('assets/image/work-study.svg')}}" alt="">
                            <h5>Work</h5>
                        </div>
                    </a>
                @elseif($ask_info->ask_code == "work")
                    <a href="{{route('ask.details', "communication")}}">
                        <div class="get-benefit">
                            <img src="{{asset('assets/image/comm.svg')}}" alt="">
                            <h5>communication</h5>
                        </div>
                    </a>
                @elseif($ask_info->ask_code == "communication")
                    <a href="{{route('ask.details', "started")}}">
                        <div class="get-benefit">
                            <img src="{{asset('assets/image/get-s.svg')}}" alt="">
                            <h5>Get Started</h5>
                        </div>
                    </a>
                @endif

                <div class="get-more">
                    <h5>Have More
                        Question
                        Still?</h5>
                    <a href="#"><img src="{{asset('assets/image/support.svg')}}" alt=""> <span>Get Free Support</span></a>
                </div>
            </div>
        </div>

    </section>
@endsection
