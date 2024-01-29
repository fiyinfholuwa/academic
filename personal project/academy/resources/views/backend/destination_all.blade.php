

@extends('backend.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Destinations</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Country
                    </th>
                    <th>Image</th>
                    <th>PDF</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($destinations as $destination)
                  <tr>
                    <td>{{optional($destination->country_info)->name}}</td>
                    <td><img height="40px" width="40px" src="{{$destination->image}}"></td>
                    <td><a class="badge bg-primary text-white" href="{{$destination->pdf}}">View PDF</a></td>

                   <td>
                    <a href="{{route('admin.destination.edit', $destination->id)}}">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#destination_delete_{{$destination->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                    @include('backend.modals.destination')
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
