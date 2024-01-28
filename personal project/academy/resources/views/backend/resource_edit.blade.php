

@extends('backend.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Resource</h5>
              <div class="card">

              <form method="post" action="{{route('admin.resource.update', $resource->id)}}" enctype="multipart/form-data" class="row g-3">
                @csrf

                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Select Country</label>
                  <select required name="country_id" class="form-control">
                      <option value="">Select Country</option>
                      @foreach($countries as $country)
                          <option value="{{$country->id}}" {{$country->id == $resource->country_id ? "selected" : ""}}>{{$country->name}}</option>
                      @endforeach
                  </select>
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('country_id')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                  <div class="col-md-6 col-lg-12">
                      <label for="inputName5" class="form-label">Resource Image</label>
                      <input type="file" name="image"  class="form-control" id="inputName5">
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('image')
                          {{$message}}
                          @enderror
                      </p>
                      <div style="margin: 20px 0px;">
                          <img height="40px" width="40px" src="{{asset($resource->image)}}">
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-12">
                      <label for="inputName5" class="form-label">Resource PDF</label>
                      <input type="file" name="pdf"  class="form-control" id="inputName5">
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('pdf')
                          {{$message}}
                          @enderror
                      </p>
                      <div style="margin: 20px 0px;">
                          <a class="badge bg-primary text-white" href="{{asset($resource->pdf)}}">View PDF</a>
                      </div>
                  </div>

                  <div class="">
                  <button type="submit" class="btn btn-primary">Update resource</button>
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
