

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Consultations</h5>
            

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      First Name
                    </th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                    <th>Intending Destination</th>
                    <th>Education Level</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($consultations as $consultation)
                  <tr>
                    <td>{{$consultation->first_name}}</td>
                    <td>{{$consultation->last_name}}</td>
                    <td>{{$consultation->email}}</td>
                    <td>{{$consultation->phone}}</td>
                    <td>
                      @if($consultation->status)
                      <span class="badge bg-warning"><i class="bi bi-check-circle me-1"></i>Pending</span>
                      @else
                      <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Handled</span>
                      @endif
                    </td>
                    <td>{{$consultation->country}}</td>
                    <td>{{$consultation->education_level}}</td>
                    <td>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#consultation_{{$consultation->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                  </tr>
                    @include('backend.modals.consultation')
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
  