

@extends('counsellor.app')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="padding-top:20px;">Hello {{Auth::user()->first_name}} {{Auth::user()->last_name}},</h1>
      <p>Here’s an overview</p>

    </div><!-- End Page Title -->

    <section style="min-height:60vh;" class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card sales-card">


                  <div style="min-height:150px; background-color: #fff" class="">
                  <!-- <h5 class="card-title">Sales <span>| Today</span></h5> -->

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <!-- <i class="bi bi-archive"></i> -->
                    </div>
                    <div style="padding:50px;" class="ps-3">
                      <h6 style="color:#1a77e5; font-size:100px;">{{$assigned_applications}}</h6>
                      <span class="text-dark small pt-1 fw-bold">Assigned Applications</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <!-- Sales Card -->
            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card sales-card">


                  <div style="min-height:150px; background-color: #fff" class="">
                  <!-- <h5 class="card-title">Sales <span>| Today</span></h5> -->

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <!-- <i class="bi bi-bookmark-check-fill"></i> -->
                    </div>
                    <div style="padding:50px;" class="ps-3">
                    <h6 style="color:#1a77e5; font-size:100px;">0</h6>
                      <span class="text-dark small pt-1 fw-bold">Successful Applications</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
<!-- Sales Card -->
            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card sales-card">


                  <div style="min-height:150px; background-color: #fff" class="">
                  <!-- <h5 class="card-title">Sales <span>| Today</span></h5> -->

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <!-- <i class="bi bi-bookmark-check"></i> -->
                    </div>
                    <div style="padding:50px;" class="ps-3">
                    <h6 style="color:#1a77e5; font-size:100px;">0</h6>
                      <span class="text-dark small pt-1 fw-bold"> Pending Consultations</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->




          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection
