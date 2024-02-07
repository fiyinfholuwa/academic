@extends('frontend.app')



@section('content')

    <section id="askgpt">
        <div class="ask-container">
            <h2 class="course-head">Find a Course</h2>
            <div class="find-course">
                <select name="course" id="course">
                    <option value="undergraduate">undergraduate</option>
                    <option value="msc">Msc</option>
                    <option value="postgraduate">Postgraduate</option>
                </select>
                <input type="text" placeholder="Search...">
                <button type="submit">Find Course</button>
            </div>

        </div>
    </section>
    <section>
        <div class="course-container">
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
@endsection
