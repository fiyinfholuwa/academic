

@extends('counsellor.app')

@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Chat with Application ID <span class="text-danger">{{$app->app_uid}}</span></h5>
              <div class="card">

              <form class="row g-3" method="post" action="{{route('counsellor.application.chat.save')}}" enctype="multipart/form-data">
                @csrf
                @if(count($chats) > 0)
                @foreach($chats as $chat)

                <div class="container {{$chat->user_type == 'counsellor' ? 'darker' : ''}}">
                    @if($chat->pdf !==null)
                        <a href="{{asset($chat->pdf)}}" download class="badge bg-primary">download file</a>
                    @endif
                    <img src="{{$chat->user_type == 'counsellor' ? 'https://as1.ftcdn.net/v2/jpg/03/53/11/00/1000_F_353110097_nbpmfn9iHlxef4EDIhXB1tdTD0lcWhG9.jpg' : 'https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI='}}" class="{{$chat->user_type == 'counsellor' ? 'right' : ''}}" alt="Avatar">
                    <p>{{$chat->message}}</p> <br>
                    <span class="{{$chat->user_type == 'counsellor' ? 'time-right' : 'time-left'}}">11:00</span>

                </div>



                    @endforeach
                    @else

                    @endif
                    <div class="col-md-12">
                  <!-- <label for="inputCity" class="form-label"></label> -->
                  <textarea name="message" required class="form-control"  placeholder="Type your Message ..."></textarea>
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('recommendation')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <input type="hidden" name="app_id" value="{{$app->id}}"/>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                <input type="hidden" name="user_type" value="counsellor"/>
                <div class="">
                  <button type="submit" class="btn btn-primary">Send Message</button>

                  <a href="{{route('counsellor.application.assigned')}}" class="btn btn-danger">Go Back</a>
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

<style>
    /* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}

</style>

  </main><!-- End #main -->
@endsection
