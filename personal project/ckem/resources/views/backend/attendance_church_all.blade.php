@extends('backend.app')

@section('content')

    <div class="row" style="margin:10px">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Church Attendances</h4>

                    <form method="post" action="{{route('attendance.church.report')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2  mt-1">
                                <div class="" style="">

                                    <input name="date_from" class="form-control "  type="date"  placeholder="Start Date"    required/>

                                </div>
                            </div>
                            <div class="col-lg-2  mt-1">
                                <div class="" style="">

                                    <input name="date_to" class="form-control "  type="date"  placeholder="End Date"   required/>

                                </div>
                            </div>



                            <div class="col-lg-4   mt-1" >
                                <button type="submit" class='btn btn-secondary btn-sm'>Export to CSV</button>
                            </div>
                        </div>
                </div>
                </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Activity</th>
                                <th>Male</th>
                                <th>Female</th>
                                <th>Children</th>
                                <th>Date</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($attendances as $attendance)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$attendance->activity}}</td>
                                    <td>{{$attendance->male}}</td>
                                    <td>{{$attendance->female}}</td>
                                    <td>{{$attendance->children}}</td>
                                    <td>{{$attendance->the_date}}</td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
