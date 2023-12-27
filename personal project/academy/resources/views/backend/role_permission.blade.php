

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        @if($role->permission == NULL)
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Set Permission for  <span class="text-danger">{{$role->name}}</span></h5>
              <div class="card">
        
              <form action="{{route('role.permission.set', $role->id)}}" method="post" class="row g-3">
                @csrf
                <div class="col-md-12 col-lg-12">
                <div class="mt-1">
                <label for="checkbox">Add Application:</label>
                <input type="checkbox" name="permission[]" id="checkbox" value="add_application">
                </div>

                <div class="mt-1">
                <label for="checkbox">Manage Applications:</label>
                <input type="checkbox" value="manage_application" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Manage Consultation:</label>
                <input type="checkbox" value="manage_consultation" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Add User:</label>
                <input type="checkbox" value="add_user" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Manage Users:</label>
                <input type="checkbox" value="manage_user" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Add Counsellor:</label>
                <input type="checkbox" value="add_counsellor" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Manage Counsellor:</label>
                <input type="checkbox" value="manage_counsellor" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Manage Role & Permission:</label>
                <input type="checkbox" value="manage_role" id="checkbox" name="permission[]">
                </div>
                <div class="mt-1">
                <label for="checkbox">Manage Admins:</label>
                <input type="checkbox" value="manage_admins" id="checkbox" name="permission[]">
                </div>

                <div class="mt-1">
                <label for="checkbox">Manage Status:</label>
                <input type="checkbox" value="manage_status" id="checkbox" name="permission[]">
                </div>
                </div>
                
                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Set Permission</button>
                </div>
              </form><!-- End Multi Columns Form -->

             
            </div>
          </div>


            </div>
          </div>
      </div>
      @else
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Set Permission for <span class="text-danger">{{$role->name}}</span></h5>
            <div class="card">

              <form action="{{route('role.permission.set', $role->id)}}" method="post" class="row g-3">
                @csrf
                <div class="col-md-12 col-lg-12">
                  @php
                    $permissionsFromDB = json_decode($role->permission);
                
                  $allPermissions = ['add_application', 'manage_application', 'add_user', 'manage_user', 'add_counsellor', 'manage_counsellor', 'manage_role', 'manage_admins', 'manage_status', 'manage_consultation'];
                  @endphp
                  @foreach($allPermissions as $permission)
                  <div class="mt-1">
                  @php
                  
                    $label = str_replace('_', ' ', $permission);
                    @endphp
                    <label for="{{$permission}}">{{$label}}</label>
                  
                    <input type="checkbox" value="{{$permission}}" id="{{$permission}}" name="permission[]" {{ in_array($permission, $permissionsFromDB) ? 'checked' : '' }}>
                  </div>
                  @endforeach

                </div>

                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Set Permission</button>
                </div>
              </form><!-- End Multi Columns Form -->


            </div>
          </div>


        </div>
      </div>
 
      @endif
  </section>



  </main><!-- End #main -->
@endsection
  