
              <div class="modal" id="user_delete_{{$user->id}}" tabindex="-1">
                <form method="post" action="{{route('admin.user.delete', $user->id)}}">
                  @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">User Delete</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this user?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->


              <div class="modal" id="user_block_{{$user->id}}" tabindex="-1">
                <form method="post" action="{{route('admin.user.block', $user->id)}}">
                  @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 style="font-weight:bold;" class="modal-title text-primary">User Block</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class=" mb-3">
                      <label>Current Block Status: 
                  
                      @if($user->block == null || $user->block == 0)
                      <span class="btn btn-success btn-sm">Unblocked<span>
                        <input name="status" value="1" type="hidden">
                      @else
                    <span class="btn btn-danger btn-sm">  Blocked</span>
                    <input name="status"  value="0" type="hidden">
                      @endif
                      </label>
                  </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        @if($user->block == null || $user->block == 0)
                        <button type="submit"  class="btn btn-danger">Block</button>
                        @else
                        <button type="submit" class="btn btn-success"> Unblock
                        @endif</button>
                    </div>
                  </div>
                </div>
                </form>
              </div><!-- End Disabled Animation Modal-->

           
