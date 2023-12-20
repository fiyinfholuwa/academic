

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit User</h5>
              <div class="card">
        
              <form method="post" action="{{route('admin.user.update', $user->id)}}" class="row g-3">
                @csrf
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">First Name</label>
                  <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" placeholder="First Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('first_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Last Name</label>
                  <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" placeholder="Last Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('last_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" name="email" value="{{$user->email}}" class="form-control" id="inputEmail5" placeholder="Email">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('email')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Phone Number</label>
                  <input type="number" name="phone" value="{{$user->phone}}" class="form-control" id="inputPassword5" placeholder="Phone Number"> 
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('phone')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Alt Phone Number</label>
                  <input type="number" name="alt_phone"  value="{{$user->alt_phone}}" class="form-control" id="inputPassword5" placeholder="Alt Phone Number"> 
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('alt_phone')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" name="city" value="{{$user->city}}" class="form-control" id="inputCity" placeholder="City">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('city')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Country</label>
                  <input type="text" name="country" value="{{$user->country}}" class="form-control" id="inputCity" placeholder="Country">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('country')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Address</label>
                  <input type="text" name="address" value="{{$user->address}}" class="form-control" id="inputCity" placeholder="Address">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('address')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="">
                  <button type="submit" class="btn btn-primary">Update User</button>
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
  