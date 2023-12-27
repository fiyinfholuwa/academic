

@extends('counsellor.app')

@section('content')
  <main id="main" class="main">
  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Assigned Applications</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Full Name
                    </th>
                    <th>
                      Application ID
                    </th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($applications as $app)
                  <tr>
                    <td>{{$app->full_name}}</td>
                    <td>{{$app->app_uid}}</td>
                    <td>{{$app->email}}</td>
                    <td>{{$app->mobile}}</td>
                
                    <td>
                      @if($app->status == "pending")
                        <span class="badge bg-warning">{{$app->status}}</span>
                      @else
                      <span class="badge bg-primary">{{optional($app->status_name)->name}}</span>
                      @endif
                      </td>
                    <td>
                    
                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#app_status_{{$app->id}}">
                    <i  class="fa fa-check-circle	 text-secondary"></i>
                    </a>
                    <a href="{{route('counsellor.application.edit', $app->id)}}">
                    <i  class="fa fa-eye text-primary"></i>
                    </a>
                    @php
                        $count = collect($unread_messages)->where('counsellor_status', 'pending')->where('app_id', $app->id)->count();
                    @endphp

                    <a href="{{route('counsellor.application.chat', $app->id)}}">
                    <i   class="fa fa-comments	 text-secondary "></i>
                    <span class="badge bg-danger" style="font-size:10px;">{{$count}}</span>
                    </a>
                    </td>
                  </tr>
                  @include('counsellor.modals.application')
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->
@endsection
  