

@extends('backend.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Courses</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Course Title
                    </th>
                    <th>Course Category</th>
                    <th>Course Duration</th>
                    <th>Entry Score (IELTS)</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($courses as $course)
                  <tr>
                    <td>{{$course->title}}</td>
                    <td>{{optional($course->course_info)->course_name}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->entry_score}}</td>

                   <td>
                    <a href="{{route('admin.course.edit', $course->id)}}">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#course_delete_{{$course->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                    @include('backend.modals.course')
                  </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->
@endsection
