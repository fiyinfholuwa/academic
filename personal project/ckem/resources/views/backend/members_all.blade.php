@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Pastors</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>S/N</th>
													<th>Full Name</th>
                                                    <th>Position</th>
                                                    <th>Image</th>
													<th>Action</th>
												</tr>
											</thead>

                                            <tbody>
											<?php $i = 1; ?>
                                            @foreach($pastors as $pastor)

											<tr>
												<td>{{$i++}}</td>
                                                <td>{{$pastor->name}}</td>
                                                <td>{{$pastor->position}}</td>
                                                <td><img height="40" width="40" src="{{asset($pastor->image)}}" /></td>
                                                <td>
                                                <a href="{{route('pastor.edit', $pastor->id)}}" ><i style="color:blue;" class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#pastor_{{$pastor->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                                </td>
                                                @include('backend.modals.deletePastor')
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
