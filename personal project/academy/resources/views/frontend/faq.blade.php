@extends('frontend.app')



@section('content')
    <section id="askgpt">
        <div class="ask-container">
            <h2>What would you like to know?</h2>
            <input type="text" placeholder="Search...">
        </div>
    </section>
    @php
        $cat = $category;
        $cat = json_decode($cat, true);
        $started = collect($cat)->firstWhere('ask_code', 'started');
        $benefit = collect($cat)->firstWhere('ask_code', 'benefit');
        $requirements = collect($cat)->firstWhere('ask_code', 'requirements');
        $eligibility = collect($cat)->firstWhere('ask_code', 'eligibility');
        $work = collect($cat)->firstWhere('ask_code', 'work');
        $communication = collect($cat)->firstWhere('ask_code', 'communication');
    @endphp
    <section>
        <div class="ask-list">
            <div class="gpt-container">
                <a href="{{route('ask.details', $started['ask_code'])}}">
                    <img src="{{asset('assets/image/get-s.svg')}}" />
                    <h6>{{$started['ask_name']}}</h6>
                </a>
                <a href="{{route('ask.details', $benefit['ask_code'])}}">
                    <img src="{{asset('assets/image/benefit.svg')}}" />
                    <h6>{{$benefit['ask_name']}}</h6>
                </a>
                <a href="{{route('ask.details', $requirements['ask_code'])}}">
                    <img src="{{asset('assets/image/reqr.svg')}}" />
                    <h6>{{$requirements['ask_name']}}</h6>
                </a>
            </div>

            <div class="gpt-container">
                <a href="{{route('ask.details', $eligibility['ask_code'])}}">
                    <img src="{{asset('assets/image/elig.svg')}}" />
                    <h6>{{$eligibility['ask_name']}}</h6>
                </a>
                <a href="{{route('ask.details', $work['ask_code'])}}">
                    <img src="{{asset('assets/image/work-study.svg')}}" />
                    <h6>{{$work['ask_name']}}</h6>
                </a>
                <a href="{{route('ask.details', $communication['ask_code'])}}">
                    <img src="{{asset('assets/image/comm.svg')}}" />
                    <h6>{{$communication['ask_name']}}</h6>
                </a>
            </div>

        </div>
    </section>
@endsection
