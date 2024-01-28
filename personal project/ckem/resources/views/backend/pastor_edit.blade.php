@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Pastor</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('pastor.add')}}" method="post" enctype="multipart/form-data">
                               @csrf
                           <div class="form-group">
                                <label for="email2">Full Name</label>
                                <input type="text" class="form-control" id="email2" required name="name" placeholder="Enter Full Name">
                                <small style="color:red; font-weight:500">
                                @error('name')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                            <div class="form-group">
                                <label for="email2">Position</label>
                                <input type="text" class="form-control" id="email2" required name="position" placeholder="Enter Position">
                                <small style="color:red; font-weight:500">
                                @error('position')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                            <div class="form-group">
                                <label for="email2">Image</label>
                                <input type="file" class="form-control" id="email2" accept="image/*" required name="image" >
                                <small style="color:red; font-weight:500">
                                @error('image')
                                {{$message}}
                                @enderror
                                </small>

                            </div>

                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary">Add Pastor</button>

                        </div>
                           </form>
                    </div>

                </div>

            </div>

@endsection
