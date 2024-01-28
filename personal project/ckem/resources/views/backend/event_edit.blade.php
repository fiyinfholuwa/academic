@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Event</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('event.add')}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <div class="form-group">
                                <label for="email2">Event Title</label>
                                <input type="text" class="form-control" id="email2" value="{{old('title')}}" name="title" placeholder="Enter  Post Title">
                                <small style="color:red; font-weight:500">
                                @error('title')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                            <div class="form-group">
                                <label for="email2">Event Content</label>
                                <textarea rows="10" type="text" class="form-control" value="{{old('body')}}" id="email2" required name="body" placeholder="Enter Event Content"></textarea>
                                <small style="color:red; font-weight:500">
                                @error('body')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                               <div class="form-group">
                                   <label for="email2">Start Date</label>
                                   <input  type="date" class="form-control" value="{{old('start_date')}}" id="email2" required name="start_date" />
                                   <small style="color:red; font-weight:500">
                                       @error('start_date')
                                       {{$message}}
                                       @enderror
                                   </small>

                               </div>

                               <div class="form-group">
                                   <label for="email2">End Date</label>
                                   <input  type="date" class="form-control" value="{{old('end_date')}}" id="email2" required name="end_date" />
                                   <small style="color:red; font-weight:500">
                                       @error('end_date')
                                       {{$message}}
                                       @enderror
                                   </small>

                               </div>


                               <div class="form-group">
                                <label for="email2">Event Image</label>
                                <input type="file" class="form-control" id="email2" accept="image/*" required name="image" >
                                <small style="color:red; font-weight:500">
                                @error('image')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary">Add Event</button>

                        </div>
                           </form>
                    </div>

                </div>

            </div>

@endsection
