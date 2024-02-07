@extends('frontend.app')



@section('content')

    <section id="askgpt">
        <div class="ask-container">
            <h2 class="course-head">Find a Course</h2>
            <div class="find-course">
                <select name="course" id="course">
                    <option value="undergraduate">undergraduate</option>
                    <option value="msc">MSc</option>
                    <option value="Postgraduate">Postgraduate</option>
                </select>
                <input type="text" placeholder="Search...">
                <button type="submit">Find Course</button>
            </div>

        </div>
    </section>
    <section>
        <div class="ask-list">
            @if(count($courses) > 0)
                @foreach($courses as $course)
                <a href="{{route('courses.detail', $course->slug)}}">
                    <div class="bachelor">
                        <h3>{{$course->title}}</h3>
                        <p>{{ Str::limit($course->description, 100) }}</p>
                        <h4>Duration: {{$course->duration}} Year(s)</h4>
                        <h6>Entry score: {{$course->entry_score}} IELTS
                        </h6>
                    </div>
                </a>
                @endforeach

            @else
                <div>
                    <h3 style="color: red; font-weight: 700; margin-top: 50px; margin-left: 100px">No Availables Courses Yet</h3>
                </div>
            @endif

        </div>
    </section>

@endsection
