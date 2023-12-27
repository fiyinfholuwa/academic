
              <div class="modal" id="app_assigned_{{$app->id}}" tabindex="-1">
                <form method="post" action="{{route('admin.application.assigned', $app->id)}}">
                  @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">Assigned Application</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <div class="col-md-12">
                  <label for="inputCity" class="form-label">Select Counsellor</label>
                  <select class="form-control" name="assigned_id" required>
                    <option value="">
                        Select Counsellor
                    </option>
                    @foreach($counsellors as $counsellor)
                    <option value="{{$counsellor->id}}" {{$counsellor->id == $app->assigned_id ? "selected": ""}}>{{$counsellor->first_name}} {{$counsellor->last_name}}</option>
                    @endforeach
                  </select>
                </div>
                
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Assign Counsellor</button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->


              <div class="modal" id="app_status_{{$app->id}}" tabindex="-1">
                <form method="post" action="{{route('admin.application.status', $app->id)}}">
                  @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">Application Status</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="col-md-12">
                  <label for="inputCity" class="form-label">Select Status</label>
                  <select class="form-control" name="status" required>
                    <option value="">
                        Select Status
                    </option>
                    @foreach($statuses as $status)
                    <option value="{{$status->id}}" {{$status->id == $app->status ? "selected": ""}}>{{$status->name}}</option>
                    @endforeach
                  </select>
                </div>
                
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       
                        <button type="submit" class="btn btn-success">Change Application Status
                        </button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->

           

              <div class="modal" id="app_delete_{{$app->id}}" tabindex="-1">
                <form method="post" action="{{route('admin.user.delete', $app->id)}}">
                  @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">Application Delete</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this Application?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->
