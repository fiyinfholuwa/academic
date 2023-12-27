
              <div class="modal" id="consultation_{{$consultation->id}}" tabindex="-1">
                <form method="post" action="{{route('consultation.delete', $consultation->id)}}">
                    @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">Consultation Delete</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this consultation request?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->

           
              <div class="modal" id="consultation_status_{{$consultation->id}}" tabindex="-1">
                <form method="post" action="{{route('admin.consultation.status', $consultation->id)}}">
                  @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">Consultation Status</h5>
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
                    <option value="{{$status->id}}" {{$status->id == $consultation->status ? "selected": ""}}>{{$status->name}}</option>
                    @endforeach
                  </select>
                </div>
                
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       
                        <button type="submit" class="btn btn-success">Change Consultation Status
                        </button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->
