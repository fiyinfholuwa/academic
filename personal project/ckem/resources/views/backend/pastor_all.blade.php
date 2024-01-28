@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Posts</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>S/N</th>
													<th>Title</th>
                                                    <th>Category</th>
                                                    <th>Content</th>
                                                    <th>Image</th>
													<th>Action</th>
												</tr>
											</thead>

                                            <tbody>
											<?php $i = 1; ?>
                                            @foreach($posts as $post)

											<tr>
												<td>{{$i++}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{optional($post->cat)->name}}</td>
                                                <td>{!!Str::limit(html_entity_decode($post->content),20,"...")!!}</td>

                                                <td><img height="40" width="40" src="{{asset($post->image)}}" /></td>
                                                <td>
                                                <a href="{{route('post.edit', $post->id)}}" ><i style="color:blue;" class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#post_{{$post->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                                </td>
                                                @include('backend.modals.deletePost')
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
