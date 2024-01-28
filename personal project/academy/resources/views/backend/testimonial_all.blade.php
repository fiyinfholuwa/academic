

@extends('backend.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Testimonials</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Full Name
                    </th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Country</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($testimonials as $testimonial)
                  <tr>
                    <td>{{$testimonial->full_name}}</td>
                    <td><img height="40px" width="40px" src="{{asset($testimonial->image)}}"></td>
                    <td><a class="badge bg-danger" href="{{$testimonial->link}}">view link</a></td>
                    <td>{{optional($testimonial->country_info)->name}}</td>

                   <td>
                    <a href="{{route('admin.testimonial.edit', $testimonial->id)}}">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#testimonial_delete_{{$testimonial->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                    @include('backend.modals.testimonial')
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
