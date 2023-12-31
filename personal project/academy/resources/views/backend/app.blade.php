<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('backend/assets/img/logo.svg')}}" rel="icon">
  <link href="{{asset('backend/assets/img/logo.svg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  *{
    label{
      font-size:12px;
      font-weight:bold;
      color:#1a77e5;
    }
  }
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('admin.dashboard')}}" class="logo d-flex align-items-center">
        <img style="height:100px; width:150px" src="{{asset('backend/assets/img/logo.svg')}}" alt="">
        <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
       
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">{{count($consultations)}}</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have {{count($consultations)}} new consultation alert
              <a href="{{route('consultation.all')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            @if(count($consultations) > 0)
            @foreach($consultations as $consultation)
            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>{{$consultation->first_name}} {{$consultation->last_name}}</h4>
                  <p>i want to get consultation, please respond promptly, thank you.</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            @endforeach
            <li class="dropdown-footer">
              <a href="{{route('consultation.all')}}">Show all messages</a>
            </li>
            @else
            <li class="dropdown-footer">
              <a href="#">No Messages yet</a>
            </li>
            @endif

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="https://ionicframework.com/docs/img/demos/avatar.svg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Super Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Super Admin</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('admin.profile.view')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard </span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed {{ request()->routeIs('application.view') || request()->routeIs('application.all') ? ' active' : '' }}" 
       data-bs-target="#charts-nav11" 
       data-bs-toggle="collapse" 
       href="#">
       @if(in_array('add_application', $permissions) || in_array('manage_application', $permissions)  || Auth::user()->user_type== 2)
        <i class="fab fa-windows"></i><span>Manage Applications</span><i class="bi bi-chevron-down ms-auto"></i>
        @endif
    </a>
    <ul id="charts-nav11" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      @if(in_array('add_application', $permissions) || Auth::user()->user_type== 2)
        <li class="{{ request()->routeIs('application.view') ? 'active' : '' }}">
            <a href="{{ route('application.view') }}">
                <i class="bi bi-circle"></i><span>Add Application</span>
            </a>
        </li>
        @endif
        @if(in_array('manage_application', $permissions) || Auth::user()->user_type== 2)
        <li class="{{ request()->routeIs('application.all') ? 'active' : '' }}">
            <a href="{{ route('application.all') }}">
                <i class="bi bi-circle"></i><span>All Applications</span>
            </a>
        </li>
        @endif
    </ul>
</li><!-- End Charts Nav -->

@if(in_array('manage_consultation', $permissions) || Auth::user()->user_type== 2)
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('consultation.all')}}">
      <i class="fas fa-user-cog	"></i>
      <span>Consultations</span>
    </a>
  </li><!-- End Profile Page Nav -->
@endif

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
    @if(in_array('add_user', $permissions) || in_array('manage_user', $permissions) || Auth::user()->user_type== 2 )
      <i class="fas fa-users"></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
      @endif
    </a>
    <ul id="charts-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    @if(in_array('add_user', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('user.add.view')}}">
          <i class="bi bi-circle"></i><span>Add User</span>
        </a>
      </li>
      @endif

      @if(in_array('manage_user', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('user.view')}}">
          <i class="bi bi-circle"></i><span>All Users</span>
        </a>
      </li>
      @endif
    </ul>
  </li><!-- End Charts Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav2" data-bs-toggle="collapse" href="#">
    @if(in_array('add_counsellor', $permissions) || in_array('manage_counsellor', $permissions) || Auth::user()->user_type== 2 )
      <i class="fas fa-users-cog"></i><span>Manage Counsellors</span><i class="bi bi-chevron-down ms-auto"></i>
      @endif
    </a>
    <ul id="charts-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    @if(in_array('add_counsellor', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('counsellor.view')}}">
          <i class="bi bi-circle"></i><span>Add Counsellor</span>
        </a>
      </li>
      @endif

      @if(in_array('manage_counsellor', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('counsellor.all')}}">
          <i class="bi bi-circle"></i><span>All Counsellors</span>
        </a>
      </li>
      @endif
    </ul>
  </li><!-- End Charts Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="fa fa-gears"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      @if(in_array('manage_role', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('role.view')}}">
          <i class="bi bi-circle"></i><span>Manage Role and Permission</span>
        </a>
      </li>
      @endif

      @if(in_array('manage_admins', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('admin_manager.view')}}">
          <i class="bi bi-circle"></i><span>Manage Admins</span>
        </a>
      </li>
      @endif

      @if(in_array('manage_status', $permissions) || Auth::user()->user_type== 2)
      <li>
        <a href="{{route('status.view')}}">
          <i class="bi bi-circle"></i><span>Manage Status</span>
        </a>
      </li>
      @endif
      <li>
        <a href="{{route('admin.profile.view')}}">
          <i class="bi bi-circle"></i><span>Profile</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('logout')}}">
      <i class="fas fa-sign-out-alt	"></i>
      <span>Signout</span>
    </a>
  </li><!-- End Profile Page Nav -->

  
</ul>

</aside><!-- End Sidebar-->


<style>
  .active{
    color: #1a77e5;
  }
</style>
@yield('content')


<footer id="footer" class="footer">
    <div class="copyright">
      <!-- &copy; Copyright <strong><span>Ancile Academy</span></strong>. All Rights Reserved -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>


 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'success':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'warning':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();
    break;

    case 'error':
      Toastify({ text: "{{ Session::get('message') }}", duration: 3000,
            style: { background: "linear-gradient(to right, #ff0000, #ff0000)" }
    }).showToast();
    break;
 }
 @endif

</script>


</body>

</html>