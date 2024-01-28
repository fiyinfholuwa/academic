@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Workers</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>S/N</th>
													<th>Full Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Email</th>
                                                    <th>Worker Status</th>
                                                    <th>Ordained Status</th>
                                                    <th>Branch</th>
												</tr>
											</thead>

                                            <tbody>
											<?php $i = 1; ?>
                                            @foreach($members as $member)

											<tr>
												<td>{{$i++}}</td>
                                                <td>{{$member->name}}</td>
                                                <td>{{$member->phone}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>
                                                    @if($member->worker_status =="yes")
                                                       <span class="text-white badge bg-success">{{$member->worker_status}}</span>
                                                    @else
                                                        <span class="text-white badge bg-dark">{{$member->worker_status}}</span>
                                                    @endif</td>
                                                <td>
                                                    @if($member->ordained_status =="yes")
                                                        <span class="text-white badge bg-success">{{$member->ordained_status}}</span>
                                                    @else
                                                        <span class="text-white badge bg-dark">{{$member->ordained_status}}</span>
                                                    @endif
                                                </td>
                                                <td>{{optional($member->branch_name)->name}}</td>

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
