

@extends('counsellor.app')

@section('content')
  
  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Application</h5>
              <div class="card">
        
              <form class="row g-3" method="post" action="{{route('admin.application.update', $app->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Full Name</label>
                  <input type="text"  readonly name="full_name" placeholder="Full Name" value="{{$app->full_name}}" class="form-control" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('full_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Email</label>
                  <input type="email" readonly name="email" placeholder="Email" value="{{$app->email}}" class="form-control" id="inputEmail5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('email')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Mobile</label>
                  <input type="number" readonly name="mobile" value="{{$app->mobile}}"  placeholder="Mobile" class="form-control" id="inputPassword5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('mobile')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress5" class="form-label">GRE/TOEFL/IELTS scores</label>
                  <!-- <input type="file"  name="gre_score" class="form-control" id="inputAddres5s" placeholder="1234 Main St"> -->
                  @if($app->gre_score != NULL)
                  <a class="badge bg-success" href="{{asset($app->gre_score)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('gre_score')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-4">
                  <label for="inputAddress2" class="form-label">Previous Work experience</label>
                  <!-- <input type="file" name="previous_work" class="form-control" id="inputAddress2" > -->
                  @if($app->previous_work != NULL)
                  <a class="badge bg-success" href="{{asset($app->previous_work)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('previous_work')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label"> Academic certificates</label>
                  <!-- <input type="file" name="certification" class="form-control" id="inputCity"> -->
                  @if($app->certification != NULL)
                  <a class="badge bg-success" href="{{asset($app->certification)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('certificate')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Letter of Recommendation</label>
                  <!-- <input type="file" name="recommendation" class="form-control" id="inputCity"> -->
                  @if($app->recommendation != NULL)
                  <a class="badge bg-success" href="{{asset($app->recommendation)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('recommendation')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                

                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Extra curriculars</label>
                  <input type="text" readonly value="{{$app->extra_curriculum}}" name="extra_curriculum" class="form-control" id="inputCity" placeholder="Extra curriculars">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('recommendation')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">11 th and 12th marksheets</label>
                  <!-- <input type="file" name="mark_sheet_11_12" class="form-control" id="inputCity"> -->
                  @if($app->mark_sheet_11_12 != NULL)
                  <a class="badge bg-success" href="{{asset($app->mark_sheet_11_12)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('mark_sheet_11_12')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">10 th grade mark sheets</label>
                  <!-- <input type="file" name="mark_sheet_10" class="form-control" id="inputCity"> -->
                  @if($app->mark_sheet_10 != NULL)
                  <a class="badge bg-success" href="{{asset($app->mark_sheet_10)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('mark_sheet_10')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Birth Certificate</label>
                  <!-- <input type="file" name="birth_certificate" class="form-control" id="inputCity"> -->
                  @if($app->birth_certificate != NULL)
                  <a class="badge bg-success" href="{{asset($app->birth_certificate)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('birth_certificate')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Passport Copy if applicable</label>
                  <!-- <input type="file" name="passport" class="form-control" id="inputCity"> -->
                  @if($app->passport != NULL)
                  <a class="badge bg-success" href="{{asset($app->passport)}}">view file</a>
                  @else
                  <span class="badge bg-danger">not stated</span>
                  @endif
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('passport')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                
                <div class="">
                  <a type="submit" href="{{route('counsellor.application.assigned')}}" class="btn btn-danger">Go Back</a>
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
  