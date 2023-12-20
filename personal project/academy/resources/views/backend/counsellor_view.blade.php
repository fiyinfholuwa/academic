

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Counsellor</h5>
              <div class="card">
        
              <form method="post" action="{{route('admin.counsellor.save')}}" class="row g-3">
                @csrf
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">First Name</label>
                  <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" placeholder="First Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('first_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Last Name</label>
                  <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control" placeholder="Last Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('last_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputEmail5" placeholder="Email">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('email')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Phone Number</label>
                  <input type="number" name="phone" value="{{old('phone')}}" class="form-control" id="inputPassword5" placeholder="Phone Number"> 
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('phone')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="">
                  <button type="submit" class="btn btn-primary">Add Counsellor</button>
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
  