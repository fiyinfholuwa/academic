@extends('branch.app')

@section('content')

            <div class="row" style="margin:10px">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Attendances</h4>
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
													<th>Action</th>
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

                                                <td>
                                                <a href="{{route('branch.attendance.edit', $attendance->id)}}" ><i style="color:blue;" class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#attendance_{{$attendance->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                                </td>
                                                @include('branch.modals.deleteAttendance')
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
