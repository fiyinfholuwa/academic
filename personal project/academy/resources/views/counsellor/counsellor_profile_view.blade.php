

@extends('counsellor.app')

@section('content')
  
<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    
    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <!-- <h5 class="card-title">About</h5> -->
             
              <!-- <h5 class="card-title">Profile Details</h5> -->

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">First  Name</div>
                <div class="col-lg-9 col-md-8">{{Auth::user()->first_name}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Last  Name</div>
                <div class="col-lg-9 col-md-8">{{Auth::user()->last_name}}</div>
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{Auth::user()->email}}</div>
              </div>

             
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Mobile</div>
                <div class="col-lg-9 col-md-8">{{Auth::user()->phone}}</div>
              </div>

              
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form method="post" action="{{route('counsellor.profile.update', Auth::user()->id)}}">
                @csrf
                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="first_name" type="text" class="form-control" id="fullName" value="{{Auth::user()->first_name}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="last_name" type="text" class="form-control" id="fullName" value="{{Auth::user()->last_name}}">
                  </div>
                </div>


                
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Mobile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone" type="number" class="form-control" id="Phone" value="{{Auth::user()->phone}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="{{Auth::user()->email}}">
                  </div>
                </div>

                
                <div class="">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
             
            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form method="post" action="{{route('counsellor.password.update')}}">
                @csrf
                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="current_password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password_confirmation" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection
  