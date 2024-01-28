@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Member</div>
                        </div>
                        <div class="card-body">
                           <form action="{{route('member.add')}}" method="post" enctype="multipart/form-data">
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
                                <label for="email2">Phone Number</label>
                                <input type="number" class="form-control" id="email2" required name="phone" placeholder="Enter Position">
                                <small style="color:red; font-weight:500">
                                @error('phone')
                                {{$message}}
                                @enderror
                                </small>

                            </div>


                               <div class="form-group">
                                   <label for="email2">Email</label>
                                   <input type="email" class="form-control" id="email2" required name="email" placeholder="Enter Position">
                                   <small style="color:red; font-weight:500">
                                       @error('email')
                                       {{$message}}
                                       @enderror
                                   </small>
                               </div>

                               <div class="form-group">
                                   <label for="email2">Worker Status</label>
                                   <select required name="worker_status" class="form-control">
                                       <option value="">Select Option</option>
                                       <option value="yes">Yes</option>
                                       <option value="no">No</option>
                                   </select>
                                   <small style="color:red; font-weight:500">
                                       @error('work_status')
                                       {{$message}}
                                       @enderror
                                   </small>
                               </div>

                               <div class="form-group">
                                   <label for="email2">Ordained Status</label>
                                   <select required name="ordained_status" class="form-control">
                                       <option value="">Select Option</option>
                                       <option value="yes">Yes</option>
                                       <option value="no">No</option>
                                   </select>
                                   <small style="color:red; font-weight:500">
                                       @error('work_status')
                                       {{$message}}
                                       @enderror
                                   </small>
                               </div>


                               <div class="form-group">
                                   <label for="email2">Select Branch</label>
                                   <select required name="branch_id" class="form-control">
                                       <option value="">Select Branch</option>

                                       @foreach($branches as $branch)
                                           <option value="{{$branch->id}}">{{$branch->name}}</option>
                                       @endforeach


                                   </select>
                                   <small style="color:red; font-weight:500">
                                       @error('work_status')
                                       {{$message}}
                                       @enderror
                                   </small>
                               </div>


                               <div class="card-action">
                            <button class="btn btn-primary">Add Member</button>

                        </div>
                           </form>
                    </div>

                </div>

            </div>

@endsection
