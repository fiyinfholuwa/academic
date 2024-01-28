
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Academy - Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="backend/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2 text-center">
                    <!-- <h5 class="card-title text-center pb-0 fs-4">Create Your Account</h5> -->
                    <img  style="height: 100px; width:150px" src="backend/assets/img/logo.svg" alt="">
                    <h5>Sign Up</h5>
                  </div>

                  <form action="{{'register'}}" method="post" class="row g-3">
                    @csrf
                    <div class="col-12">
                      <!-- <label for="yourUsername" class="form-label">Full Name</label> -->
                      <div class="">
                        <input placeholder="Enter First Name" type="text" name="first_name" value="{{old('name')}}" class="form-control" id="name" required>
                        <div class="invalid-feedback">Please enter your first name.</div>
                       
                      </div>
                      <p style="color:red">
                        @error('first_name')
                        {{$message}}
                        @enderror
                        </p>
                    </div>


                    <div class="">
                        <input placeholder="Enter Last Name" type="text" name="last_name" value="{{old('name')}}" class="form-control" id="name" required>
                        <div class="invalid-feedback">Please enter your last name.</div>
                       
                      </div>
                      <p style="color:red">
                        @error('last_name')
                        {{$message}}
                        @enderror
                        </p>
                    </div>


                    <div class="col-12">
                      <!-- <label for="yourUsername" class="form-label">Email</label> -->
                      <div class="input-group has-validation">
                        <input placeholder="Enter Your Email" type="text" name="email" value="{{old('email')}}" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                       
                      </div>
                      <p style="color:red">
                        @error('email')
                        {{$message}}
                        @enderror
                        </p>
                    </div>

                    <div class="col-12">
                      <!-- <label for="yourPassword" class="form-label">Password</label> -->
                      <input  placeholder="Enter Your Password" type="password" name="password" value="{{old('password')}}" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                      <p style="color:red">
                        @error('password')
                        {{$message}}
                        @enderror
                        </p>
                    </div>

                    <div class="col-12">
                      <!-- <label for="yourPassword" class="form-label">Password Confirmaation</label> -->
                      <input placeholder="Confirm Your Password" type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" id="yourPasswordconfirmation" required>
                      <div class="invalid-feedback">Please enter your password confirmaation!</div>
                      <p style="color:red">
                        @error('password')
                        {{$message}}
                        @enderror
                        </p>
                    </div>

                
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div>
                    <div class="col-12">
                    <p class="small mb-0">You already have an account? <a href="{{route('login')}}">Login</a></p>

                    </div>
                  </form>

                </div>
              </div>

              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="backend/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="backend/assets/vendor/echarts/echarts.min.js"></script>
  <script src="backend/assets/vendor/quill/quill.min.js"></script>
  <script src="backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="backend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="backend/assets/js/main.js"></script>

</body>

</html>