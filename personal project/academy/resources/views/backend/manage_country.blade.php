

@extends('backend.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Country</h5>
              <div class="card">

              <form method="post" action="{{route('manage.country.save')}}"  enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Country Name</label>
                  <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Country Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Country Flag</label>
                  <input type="file" name="flag"  class="form-control"  id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('flag')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary">Add Country</button>
                </div>
              </form><!-- End Multi Columns Form -->


            </div>
          </div>


            </div>
          </div>


          <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Countries</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>

                    <th>Country Name</th>
                    <th>Country Flag</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($countries as $country)
                  <tr>
                    <td>{{$country->name}}</td>
                    <td><img height="40px" width="40px" src="{{asset($country->flag)}}"></td>

                    <td>

                    <a href="{{route('manage.country.edit', $country->id)}}">
                    <i  class="fa fa-edit text-primary"></i>
                    </a>
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#manage_country_{{$country->id}}">
                    <i  class="fa fa-trash text-danger"></i>
                    </a>
                    </td>
                    @include('backend.modals.manage_country')
                  </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->
@endsection
