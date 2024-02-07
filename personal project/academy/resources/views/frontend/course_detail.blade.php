@extends('frontend.app')



@section('content')

    <section>
        <div class="bsc-container">
            <h2>{{$course->title}}</h2>
            <div class="bsc-duration-box">
                <div class="bsc-duration">
                    <h4>{{$course->duration}} Year(s)</h4>
                    <p>Duration</p>
                </div>
                <div class="bsc-duration">
                    <h4>{{$course->entry_score}} IELTS</h4>
                    <p>Entry score</p>
                </div>
                <div class="bsc-duration">
                    <h4>{{$course->entry_score2}} TOEFL iBT</h4>
                    <p>Entry score</p>
                </div>
            </div>
            <div class="bsc-about">
                <h1>About the course</h1>
                <div class="bsc-para">
                    {!! $course->about !!}

                </div>
        </div>
    </section>
@endsection
