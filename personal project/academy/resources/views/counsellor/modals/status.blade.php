
              <div class="modal" id="status_{{$status->id}}" tabindex="-1">
                <form method="post" action="{{route('status.delete', $status->id)}}">
                    @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">Status Delete</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this Status?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->

           
