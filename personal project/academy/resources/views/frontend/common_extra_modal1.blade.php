<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<head>
    <!-- ... Other head elements ... -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<div id="consult">
    <a href="#" class="consult-link"><i class="fa-solid fa-xmark"></i></a>
    <h3 class="consult-head">START A FREE CONSULTATION</h3>

    <form action="javascript:void(0);" class="consult-form" id="consultForm">
        <div class="consult-details">
            <input type="text" name="first_name" id="fname" placeholder="First name"> <br>
            <p class="error" id="first_name_error" style="color: white;"></p>

            <input type="text" name="last_name" id="lname" placeholder="Last name"><br>
            <p class="error" id="last_name_error" style="color: white;"></p>
        </div>

        <div class="consult-details">
            <input type="email" name="email" id="email" placeholder="Email address">
            <p class="error" id="email_error" style="color: white;"></p>

            <input type="tel" id="phone" name="phone" placeholder="Phone number">
            <p class="error" id="phone_error" style="color: white;"></p>
        </div>

        <div class="consult-select">
            <h4>Your intending study destination</h4>
            <select name="country" id="country">
                <!-- ... Options ... -->
            </select>
            <p class="error" id="country_error" style="color: white;"></p>
        </div>

        <div class="consult-select">
            <h4>What level of study are you planning for?</h4>
            <select name="education_level" id="education_level">
                <option value="Nigeria">100level</option>
                <option value="Ghana">200level</option>
            </select>
            <p class="error" id="education_level_error" style="color: white;"></p>
        </div>

        <button type="button" id="sendButton">Send Request</button>
    </form>


    <p class="consult-parag">As soon as your request is received, an expert will be assigned to see you through an
        advice stage. If need be a university counsellor will be in the process to guide you on the right choices.</p>
</div>

<!-- Register............................ -->
{{--<div id="register">--}}
{{--    <h3 class="reg-head">CREATE ACCOUNT</h3>--}}
{{--    <form id="registrationForm" action="{{ route('register') }}" method="POST" class="consult-form">--}}
{{--        @csrf <!-- CSRF token -->--}}
{{--        <div class="consult-details">--}}
{{--            <input type="text" name="register_first_name" id="register_first_name" placeholder="Enter First Name">--}}
{{--            <div id="register_first_name-error" class="error"></div> <!-- Error placeholder -->--}}
{{--        </div>--}}
{{--        <div class="consult-details">--}}
{{--            <input type="text" name="register_last_name" id="register_last_name" placeholder="Enter Last Name">--}}
{{--            <div id="register_last_name-error" class="error"></div> <!-- Error placeholder -->--}}
{{--        </div>--}}
{{--        <div class="consult-details">--}}
{{--            <input type="email" name="register_email" id="register_email" placeholder="Enter Email Address">--}}
{{--            <div id="register_email-error" class="error"></div> <!-- Error placeholder -->--}}
{{--        </div>--}}
{{--        <div class="consult-details">--}}
{{--            <input type="number" name="register_phone" id="register_phone" placeholder="Enter Phone Number">--}}
{{--            <div id="register_phone-error" class="error"></div> <!-- Error placeholder -->--}}
{{--        </div>--}}
{{--        <div class="consult-password">--}}
{{--            <div class="password-box">--}}
{{--                <input type="password" name="register_password" id="register_password" placeholder="Enter Password">--}}
{{--                <div id="register_password-error" class="error"></div> <!-- Error placeholder -->--}}
{{--            </div>--}}
{{--            <div class="password-box">--}}
{{--                <input type="password" name="register_password_confirmation" id="register_password_confirmation" placeholder="Confirm Password">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="reg-button">--}}
{{--            <button type="submit">Create Account</button>--}}
{{--        </div>--}}
{{--    </form>--}}

{{--    <p class="consult-parag">By clicking, create account up you will be agreeing to our <a href="#">Terms &--}}
{{--            Conditions</a> & <a href="#">Privacy Policy</a></p>--}}
{{--</div>--}}

<!-- Login............................ -->
<div id="login">
    <!-- ... other HTML code ... -->
    <form id="loginForm" action="{{ route('login.user') }}" method="post" class="consult-form">
        @csrf
        <div class="login-div">
            <label for="email">Email Address</label><br><br>
            <input type="email" id="login_email" name="login_email" placeholder="Enter Email Address">
            <p class="error" id="login_email_error" style="color: white;"></p>
        </div>

        <div class="login-div">
            <label for="passwordField">Password</label><br><br>
            <div class="login-divv">
                <input type="password" id="passwordField" name="password" placeholder="Enter Password">
                <p class="error" id="password_error" style="color: white;"></p>
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <i class="fa-solid fa-eye" id="eyeIcon"></i>
                </span>
            </div>
            <div class="field-error" id="password_error"></div>
        </div>

        <!-- ... other form fields ... -->
        <button type="submit" class="loginGo">Login</button>
    </form>
    <div id="errorMessages"></div>
</div>

<div class="custom-modal" id="successModal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <p id="successMessage"></p>
        <a href="{{route('home')}}">Ok</a>
    </div>
</div>

<style>
    .custom-modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
        z-index: 1;
    }

    .error-message {
        color: white;
    }

    .field-error.error {
        color: white;
    }

    .custom-modal .close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 40px;
        cursor: pointer;
    }

    .custom-modal a {
        margin-top: 10px;
        padding: 10px;
        background-color: #0a53be;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const consult = document.getElementById('consult');
        const closeConsult = document.querySelector('.consult-link');

        $('#sendButton').click(function () {
            // Clear previous errors
            $('.error').text('');

            // Serialize form data
            var formData = $('#consultForm').serialize();

            // Include CSRF token in the data
            formData += '&_token=' + $('meta[name="csrf-token"]').attr('content');

            // Submit form data using AJAX
            $.ajax({
                type: 'POST',
                url: '{{ route("consultation.add") }}', // Replace with your actual route name
                data: formData,
                dataType: 'json',
                success: function (data) {
                    // Display success message in the modal
                    showSuccessModal(data.message);

                    // Close the modal
                    closeConsultModal();
                },
                error: function (xhr) {
                    // Handle errors (display error messages)
                    if (xhr.status === 422) {
                        // Validation errors
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = 'The following errors occurred:';

                        for (var key in errors) {
                            // Display all errors for each field
                            $('#' + key + '_error').text(errors[key][0]);
                            // Add errors to the general error message
                            errorMessage += '\n- ' + errors[key][0];
                        }

                        alert(errorMessage);
                    } else {
                        // Other server-side errors
                        alert('An error occurred while processing your request. Please try again.');
                    }
                }
            });
        });

        // Show success modal
        function showSuccessModal(message) {
            document.getElementById('successMessage').innerText = message;
            document.getElementById('successModal').style.display = 'block';
        }

        // Close modal
        function closeConsultModal() {
            consult.classList.remove('active');
        }

        closeConsult.addEventListener('click', (e) => {
            e.preventDefault();
            closeConsultModal();
        });
    });


    $(document).ready(function () {
        $('#loginForm').submit(function (e) {
            e.preventDefault();

            // Serialize form data
            var formData = $(this).serialize();

            // Submit form data using Ajax
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                dataType: 'json',
                success: function (data) {
                    if(data.success){
                        window.location.href = data.redirect;
                    }else{
                        $('#login_email_error').text(data.errors);
                    }
                },
                error: function (xhr) {
                    // Handle errors (display error messages)
                    if (xhr.status === 422) {
                        // Validation errors
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = 'The following errors occurred:';
                        for (var key in errors) {
                            // Display all errors for each field
                            $('#' + key + '_error').text(errors[key][0]);
                            if(key=='email'){
                                $('#register_email_error').text(errors[key][0]);
                            }
                            errorMessage += '\n- ' + errors[key][0];
                        }
                        alert(errorMessage);
                    } else {
                        // Other server-side errors
                        alert('An error occurred while processing your request. Please try again.');
                    }
                }
            });
            });
    });

</script>

