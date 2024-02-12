@extends('frontend.app')



@section('content')
    <div class="application-header-box">
        <div class="application-header">
            <a href="{{route('profile')}}"> > Back To Applications List</a>
            <h2>New Application</h2>
        </div>
        <h3>Please provide documents and details which asked in the form and we will get back to you.</h3>
    </div>

    <section>
        <form action="{{route('user.application.save')}}"  method="post" enctype="multipart/form-data">
            @csrf
            <div class="personal-detail">
                <h2>Personal Details</h2>
                <div class="personal">
                    <div class="first-input">
                        <label for="name">Your name (As in Passport)</label>
                        <input type="text" id="name" value="{{old('full_name')}}" name="full_name" placeholder="Enter your name now">
                        <p style="color: red; font-weight: 500">
                            @error('full_name')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="second-input">
                        <label for="fname">DoB</label>
                        <!-- <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"> -->
                        <input type="date" value="{{old('dob')}}" id="fname" name="dob" placeholder="shakur">
                        <p style="color: red; font-weight: 500">
                            @error('dob')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                </div>

                <div class="personal">
                    <div class="first-input">
                        <label for="mail">Email address</label>
                        <input type="text" value="{{old('email')}}" id="mail" name="email" placeholder="xyz@email.com">
                        <p style="color: red; font-weight: 500">
                            @error('email')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="first-input">
                        <label for="phone">Mobile Number</label>
                        <!-- <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"> -->
                        <input  value="{{old('mobile')}}" id="phone" type="number" name="mobile">
                        <p style="color: red; font-weight: 500">
                            @error('mobile')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                </div>
            </div>

            <div class="personal-detail">
                <h2>Personal Details</h2>
                <div class="personal">
                    <div class="first-input">
                        <label for="program">Choose Program</label>
                        <select name="program" id="program">
                            <option value="">Select program</option>
                            <option value="Bachelors Degree">Bachelors Degree</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors Degree">Bachelors Degree</option>
                            <option value="Secondary">Secondary school</option>
                        </select>
                        <p style="color: red; font-weight: 500">
                            @error('program')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="first-input">
                        <label for="Course">Course Preferences ( Separate with comma )</label>
                        <select name="course" id="course">
                            <option value="">Enter course</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Computer Science">Computer Science</option>
                        </select>
                        <p style="color: red; font-weight: 500">
                            @error('course')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                </div>

                <div class="personal">
                    <div class="first-input">
                        <label for="country">Country Preference</label>
                        <select  name="country" id="country" class="form-control">
                            <option value="Select Country" disabled selected>Select country</option>

                        </select>
                        <p style="color: red; font-weight: 500">
                            @error('country')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="first-input">
                        <label for="year">Academic year</label>
                        <select name="year" id="year">
                            <option value="" disabled>Select Year</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2023/2024">2023/2024</option>
                        </select>
                        <p style="color: red; font-weight: 500">
                            @error('year')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                </div>
            </div>

            <div class="personal-detail">
                <h2>Required Documents</h2>
                <div class="personal">
                    <div>
                        <p class="file-text">10th Certificate</p>
                        <div class="file-input">
                            <label for="fileInput1" class="file-label">
                                <img src="{{asset('assets/image/upload.svg')}}" />Drag & Drop or &nbsp;<span class="browse-text">Choose file
                  </span>&nbsp; to
                                Upload (Jpeg, Pdf,
                                png are accepted | Max 4mb) browse

                            </label>
                            <input style="display: none" type="file" name="mark_sheet_10" id="fileInput1" class="file-input"
                                   accept=".jpeg, .jpg, .pdf, .png">
                            <div id="selectedFileName1"></div>

                        </div>
                    </div>

                </div>
                <div class="personal">
                    <div>
                        <p class="file-text">10+2 Certificate</p>
                        <div class="file-input">
                            <label for="fileInput2" class="file-label">
                                <img src="{{asset('assets/image/upload.svg')}}" />Drag & Drop or &nbsp;<span class="browse-text">Choose file
                  </span>&nbsp; to
                                Upload (Jpeg, Pdf,
                                png are accepted | Max 4mb) browse

                            </label>
                            <input style="display: none" type="file" name="mark_sheet_11_12" id="fileInput2" class="file-input"
                                   accept=".jpeg, .jpg, .pdf, .png">
                            <div id="selectedFileName2"></div>

                        </div>
                    </div>

                </div>
                <div class="personal">
                    <div>
                        <p class="file-text">Passport</p>
                        <div class="file-input">
                            <label for="fileInput3" class="file-label">
                                <img src="{{asset('assets/image/upload.svg')}}" />Drag & Drop or &nbsp;<span class="browse-text">Choose file
                  </span>&nbsp; to
                                Upload (Jpeg, Pdf,
                                png are accepted | Max 4mb) browse

                            </label>
                            <input style="display: none" type="file" name="passport" id="fileInput3" class="file-input"
                                   accept=".jpeg, .jpg, .pdf, .png">
                            <div id="selectedFileName3"></div>

                        </div>
                    </div>
                </div>
{{--                <a href="#" class="add-document">Add Another Document</a>--}}
                <div class="last-btn">
                    <a href="#">Cancel</a>
                    <button type="submit">Submit application</button>
                </div>
            </div>
        </form>

    </section>


    <script>
        function setupFileInput(inputId, fileNameContainerId) {
            var fileInput = document.getElementById(inputId);
            var fileNameContainer = document.getElementById(fileNameContainerId);

            fileInput.addEventListener('change', function (e) {
                if (fileInput.files.length > 0) {
                    fileNameContainer.textContent = 'Selected File: ' + fileInput.files[0].name;
                } else {
                    fileNameContainer.textContent = '';
                }
            });
        }

        // Call the function for each file input
        setupFileInput('fileInput1', 'selectedFileName1');
        setupFileInput('fileInput2', 'selectedFileName2');
        setupFileInput('fileInput3', 'selectedFileName3');
        // Add more calls as needed for additional file inputs
    </script>
@endsection
