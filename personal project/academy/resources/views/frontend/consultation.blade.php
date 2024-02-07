<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academy Frontend</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script src="assets/js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" >

</head>
<body>
<section class="login">
    <div class="row">
        <div class="col-lg-6 col-md-12 left">
            <div class="nav_top">
                <span>Programs & Courses</span> <span>Study Destination</span>
            </div>
            <div class="login_logo">
                <img src="{{asset('assets/image/AncileAcad-logo.svg')}}" />
            </div>
            <div class="login_left_text">
                <h3>
                    Explore <br />
                    Boundless <br />
                    Horizons
                </h3>
                <p>Your Gateway to Global Education Opportunities</p>
                <div class="btn_wrap">
                    <a href="">Get started</a>
                </div>
            </div>
            <div class="bg_bottom">

            </div>
        </div>
        <div class="col-lg-6 col-md-12 right">
            <div class="wrap_times">
                <a href="{{route('home')}}"><img src="assets/image/close-aa.svg" /></a>
            </div>
            <div>
                <h3>START A FREE <br />
                    CONSULTATION</h3>
                <form class="register" method="post" action="{{route('consultation.add')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mt-4">
                                <!-- <label>First Name</label> -->
                                <input value="{{old('first_name')}}" name="first_name" type="text" class="form-control" placeholder="Enter First Name" />
                            </div>
                            <p style="color:red">
                                @error('first_name')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group">
                                <!-- <label>Last Name</label> -->
                                <input value="{{old('last_name')}}" name="last_name" type="text" class="form-control" placeholder="Enter Last Name" />
                            </div>
                            <p style="color:red">
                                @error('last_name')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group">
                                <!-- <label>Email Address</label> -->
                                <input value="{{old('email')}}" name="email" type="text" class="form-control" placeholder="Enter Email Address" />
                            </div>
                            <p style="color:red">
                                @error('email')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="form-group">
                                <!-- <label>Mobile Number</label> -->
                                <!-- <input type="tel" class="form-control" placeholder="Enter Mobile Number" /> -->
                                <input value="{{old('phone')}}" id="phone" type="number" name="phone" placeholder="Enter Mobile Number" class="form-control">
                            </div>

                            <p style="color:red">
                                @error('phone')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group password-container">
                                <label>Your intending study destination</label>
                                <select  name="country" id="country" class="form-control">
                                    <option value="Select Country" disabled selected>Select country</option>

                                </select>
                                <!-- <input type="text" class="form-control" placeholder="Enter Country" /> -->
                            </div>
                            <p style="color:red">
                                @error('country')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group password-container">
                                <label>What level of study are you planning for?</label>
                                <select  name="education_level" id="level" class="form-control">
                                    <option value="Select Education Level" disabled selected>Select Edcation
                                        Level
                                    </option>
                                    <option value="undergraduate">Undergraduate</option>
                                    <option value="postgraduate">Postgraduate</option>
                                </select>
                                <!-- <input type="text" class="form-control" placeholder="Select Education Level" /> -->
                            </div>
                            <p style="color:red">
                                @error('education_level')
                                {{$message}}
                                @enderror
                            </p>
                        </div>

                    </div>

                    <div class="row">
                        <!-- <div class="col-lg-6 col-md-6">
                        <div class="form-group password-container">
                            <label>What level of study are you planning for?</label>
                            <input type="text" class="form-control" placeholder="Select Education Level"/>
                        </div>
                    </div> -->

                    </div>


                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <button class="btn_submit" type="submit">Submit Request</button>
                        </div>

                    </div>



                    <h6 id="term_condition">As soon as your request is received, an expert will be assigned to
                        see you through an advice stage.
                        If need be a university counsellor will be in the process to guide you on right choices.
                    </h6>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

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
