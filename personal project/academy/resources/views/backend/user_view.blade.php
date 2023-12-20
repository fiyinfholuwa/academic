

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Users</h5>
            

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
                    <th>Country</th>
                    <th>Block Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->country}}</td>
                    <td>
                      @if($user->block == null || $user->block == "0")
                      <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Unblocked</span>
                      @else
                      <span class="badge bg-danger"><i class="bi bi-check-circle me-1"></i>Blocked</span>
                      @endif
                    </td>
                    <td>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#user_block_{{$user->id}}">
                    <i  class="fa fa-ban text-warning"></i>
                    </a>
                    <a href="{{route('admin.user.edit', $user->id)}}">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#user_delete_{{$user->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                    @include('backend.modals.user')
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
  