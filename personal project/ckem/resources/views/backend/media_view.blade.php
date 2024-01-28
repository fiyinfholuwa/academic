@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Audio Message</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('audio.add')}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <div class="form-group">
                                <label for="email2">Audio Title</label>
                                <input type="text" class="form-control" id="email2" value="{{old('title')}}"  name="title" placeholder="Enter  Audio Title">
                                <small style="color:red; font-weight:500">
                                @error('title')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                               <div class="form-group">
                                   <label for="email2">Audio File</label>
                                   <input type="file" class="form-control" id="email2" name="file" >
                                   <small style="color:red; font-weight:500">
                                       @error('file')
                                       {{$message}}
                                       @enderror
                                   </small>

                               </div>

                               <div class="form-group">
                                   <label for="email2">Audio Preacher</label>
                                   <input type="text" class="form-control" id="email2" accept=".mp3" value="{{old('preacher')}}"  name="preacher" placeholder="Enter  Audio Preacher">
                                   <small style="color:red; font-weight:500">
                                       @error('preacher')
                                       {{$message}}
                                       @enderror
                                   </small>

                               </div>


                               <div class="form-group">
                                <label for="email2">Audio Image</label>
                                <input type="file" class="form-control" id="email2" accept="image/*"  name="image" >
                                <small style="color:red; font-weight:500">
                                @error('image')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                        <div class="card-action">
                            <button class="btn btn-primary">Add Audio</button>

                        </div>
                       </form>
                    </div>

                </div>


                <div class="col-lg-7">

                </div>
            </div>

@endsection
