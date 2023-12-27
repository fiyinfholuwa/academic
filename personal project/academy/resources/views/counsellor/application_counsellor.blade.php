

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$user->first_name}} {{$user->last_name}}'s Applications</h5>
            

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Full Name
                    </th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Counsellor</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($applications as $app)
                  <tr>
                    <td>{{$app->full_name}}</td>
                    <td>{{$app->email}}</td>
                    <td>{{$app->mobile}}</td>
                    <td>
                    @if($app->assigned_id == NULL)
                        <span class="badge bg-secondary">Not Assigned</span>
                      @else
                      <span class="badge bg-primary">{{optional($app->counsellor_name)->first_name}}  {{optional($app->counsellor_name)->last_name}}</span>
                      @endif
                      
                    </td>
                    <td>
                      @if($app->status == "pending")
                        <span class="badge bg-warning">{{$app->status}}</span>
                      @else
                      <span class="badge bg-primary">{{optional($app->status_name)->name}}</span>
                      @endif
                      </td>
                    <td>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#app_assigned_{{$app->id}}">
                    <!-- <i  class="fa fa-check-circle	text-secondary"></i> -->
                    <span class="badge bg-success">Assign Counsellor</span>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#app_status_{{$app->id}}">
                    <i  class="fa fa-check-circle	 text-secondary"></i>
                    </a>
                    <a href="{{route('admin.application.edit', $app->id)}}">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#app_delete_{{$app->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                  </tr>
                  @include('backend.modals.application')
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
  