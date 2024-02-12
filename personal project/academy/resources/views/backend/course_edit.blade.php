

@extends('backend.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Course</h5>
              <div class="card">

              <form method="post" action="{{route('admin.course.update', $course->id)}}" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6 col-lg-12">
                  <label for="inputName5" class="form-label">Course Title</label>
                  <input type="text" name="title" value="{{$course->title}}" class="form-control" placeholder="Enter Course Title" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('title')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6 col-lg-12">
                  <label for="inputName5" class="form-label">Course Description</label>
                  <textarea name="description" placeholder="Enter Course Description" class="form-control" rows="10">{{$course->description}}</textarea>
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('description')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                  <div class="col-md-6 col-lg-4">
                      <label for="inputName5" class="form-label">Duration</label>
                      <input type="number" value="{{$course->duration}}" class="form-control" name="duration">
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('duration')
                          {{$message}}
                          @enderror
                      </p>
                  </div>

                  <div class="col-md-6 col-lg-4">
                      <label for="inputName5" class="form-label">Entry Score (IELTS)</label>
                      <input type="text" value="{{$course->entry_score}}" class="form-control" name="entry_score">
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('entry_score')
                          {{$message}}
                          @enderror
                      </p>
                  </div>

                 <div class="col-md-6 col-lg-4">
                      <label for="inputName5" class="form-label">Entry Score (TOEFL iBT)</label>
                      <input type="text" value="{{$course->entry_score2}}" class="form-control" name="entry_score2">
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('entry_score2')
                          {{$message}}
                          @enderror
                      </p>
                  </div>


                  <div class="col-md-12 col-lg-6">
                  <label for="inputCity" class="form-label">Course Category</label>
                  <select required name="course_id" class="form-control">
                      <option value="">Select Course</option>
                      @foreach($courses as $coursed)
                          <option value="{{$coursed->id}}" {{$coursed->id == $course->course_id ? "selected" : ""}}>{{$coursed->course_name}}</option>
                      @endforeach
                  </select>
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('course_id')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                  <div class="col-md-12 col-lg-6">
                      <label for="inputCity" class="form-label">Educational Category</label>
                      <select required name="level" class="form-control">
                          <option value="">Select Levels</option>
                          @foreach($levels as $level)
                              <option value="{{$level->id}}" {{$level->id == $course->level ? "selected" : ""}}>{{$level->level_name}}</option>
                          @endforeach
                      </select>
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('level')
                          {{$message}}
                          @enderror
                      </p>
                  </div>


                  <div class="col-md-6 col-lg-12">
                      <label for="inputName5" class="form-label">About the Course</label>
                      <textarea name="about" id="myTextarea" placeholder="Enter About Course" class="form-control" rows="10">{{$course->about}}</textarea>
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('about')
                          {{$message}}
                          @enderror
                      </p>
                  </div>



                  <div class="">
                  <button type="submit" class="btn btn-primary">Update Course</button>
                </div>
              </form><!-- End Multi Columns Form -->


            </div>
          </div>


            </div>
          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->
@endsection
