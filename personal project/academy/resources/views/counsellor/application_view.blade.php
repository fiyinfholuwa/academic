

@extends('backend.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Application</h5>
              <div class="card">
        
              <form class="row g-3" method="post" action="{{route('admin.application.save')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Full Name</label>
                  <input type="text"  name="full_name" placeholder="Full Name" class="form-control" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('full_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" name="email" placeholder="Email" class="form-control" id="inputEmail5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('email')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Mobile</label>
                  <input type="number" name="mobile"  placeholder="Mobile" class="form-control" id="inputPassword5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('mobile')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress5" class="form-label">Upload GRE/TOEFL/IELTS scores</label>
                  <!-- <input type="file"  name="gre_score" class="form-control" id="inputAddres5s" placeholder="1234 Main St"> -->
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('gre_score')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-4">
                  <label for="inputAddress2" class="form-label">Previous Work experience (if applicable)</label>
                  <input type="file" name="previous_work" class="form-control" id="inputAddress2" >
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('previous_work')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Upload Academic certificates</label>
                  <input type="file" name="certification" class="form-control" id="inputCity">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('certificate')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Letter of Recommendation</label>
                  <input type="file" name="recommendation" class="form-control" id="inputCity">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('recommendation')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                

                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Extra curriculars</label>
                  <input type="text" name="extra_curriculum" class="form-control" id="inputCity" placeholder="Extra curriculars">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('recommendation')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">11 th and 12th marksheets</label>
                  <input type="file" name="mark_sheet_11_12" class="form-control" id="inputCity">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('mark_sheet_11_12')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">10 th grade mark sheets</label>
                  <input type="file" name="mark_sheet_10" class="form-control" id="inputCity">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('mark_sheet_10')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Birth Certificate</label>
                  <input type="file" name="birth_certificate" class="form-control" id="inputCity">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('birth_certificate')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Passport Copy if applicable</label>
                  <input type="file" name="passport" class="form-control" id="inputCity">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('passport')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="">
                  <button type="submit" class="btn btn-primary">Save Application</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
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
  