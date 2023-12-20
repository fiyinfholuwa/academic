

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Status</h5>
              <div class="card">
        
              <form action="{{route('status.update', $status->id)}}" method="post" class="row g-3">
                @csrf
                <div class="col-md-12 col-lg-12">
                  <label for="inputName5" class="form-label">Status Name</label>
                  <input type="text" name="name"  class="form-control" value="{{$status->name}}"  placeholder="Status Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
              </form><!-- End Multi Columns Form -->

             
            </div>
          </div>


            </div>
          </div>


        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Status</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
                @foreach($statuses as $status)
                  <tr>
                    <td>{{$status->name}}</td>
                
                    <td>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#disabledAnimation">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#status_{{$status->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                    @include('backend.modals.status')
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
  