@extends('branch.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Attendance</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('branch.attendance.update', $attendance->id)}}" method="post" enctype="multipart/form-data">
                               @csrf

                               <div class="form-group">
                                <label for="email2">Activities Name</label>
                                <input type="text" class="form-control" value="{{$attendance->activity}}" id="email2"  name="activity" placeholder="Enter activity name">
                                <small style="color:red; font-weight:500">
                                @error('activity')
                                {{$message}}
                                @enderror
                                </small>

                            </div>


                           <div class="form-group">
                                <label for="email2">Male</label>
                                <input type="number" class="form-control" value="{{$attendance->male}}" id="email2"  name="male" placeholder="Enter Number of Male">
                                <small style="color:red; font-weight:500">
                                @error('male')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                            <div class="form-group">
                                <label for="email2">Female</label>
                                <input type="number" class="form-control" value="{{$attendance->female}}" id="email2"  name="female" placeholder="Enter Number of Female">
                                <small style="color:red; font-weight:500">
                                @error('female')
                                {{$message}}
                                @enderror
                                </small>

                            </div>


                            <div class="form-group">
                                <label for="email2">Children</label>
                                <input type="number" class="form-control" value="{{$attendance->children}}" id="email2"  name="children" placeholder="Enter Number of Children">
                                <small style="color:red; font-weight:500">
                                @error('children')
                                {{$message}}
                                @enderror
                                </small>

                            </div>


                            <div class="form-group">
                                <label for="email2">Date</label>
                                <input type="date" class="form-control" value="{{$attendance->the_date}}" id="email2"  name="the_date" placeholder="">
                                <small style="color:red; font-weight:500">
                                @error('children')
                                {{$message}}
                                @enderror
                                </small>

                            </div>



                        <div class="card-action">
                            <button class="btn btn-primary">Update Attendance</button>

                        </div>
                           </form>
                    </div>

                </div>

            </div>

@endsection
