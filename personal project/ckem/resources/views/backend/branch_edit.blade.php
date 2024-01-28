@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Church Branch</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('branch.add')}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <div class="form-group">
                                <label for="email2">Branch Name</label>
                                <input type="text" class="form-control" id="email2" required value="{{old('name')}}" name="name" placeholder="Enter Branch Name">
                                <small style="color:red; font-weight:500">
                                @error('name')
                                {{$message}}
                                @enderror
                                </small>

                            </div>
                            <div class="form-group">
                                <label for="email2">Branch Email</label>
                                <input type="email"  class="form-control" id="email2" value="{{old('email')}}" required name="email" placeholder="Enter Branch Email">
                                <small style="color:red; font-weight:500">
                                @error('email')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                               <div class="form-group">
                                   <label for="email2">Branch Phone Number</label>
                                   <input type="number" rows="10" class="form-control" id="email2" value="{{old('phone')}}" required name="phone" placeholder="Enter Branch Phone Number">
                                   <small style="color:red; font-weight:500">
                                       @error('phone')
                                       {{$message}}
                                       @enderror
                                   </small>

                               </div>
                            <div class="form-group">
                                <label for="email2">Branch Location</label>
                                <input type="text" class="form-control" id="email2" value="{{old('address')}}" required name="address" placeholder="Enter Branch Location">
                                <small style="color:red; font-weight:500">
                                @error('address')
                                {{$message}}
                                @enderror
                                </small>

                            </div>


                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary">Add Branch</button>

                        </div>
                           </form>
                    </div>

                </div>

            </div>

@endsection
