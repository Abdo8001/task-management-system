{{-- <div class="modal fade" id="delete_user{{ $user->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <form action="{{ route('users.destroy',$user->id) }}" method="post">
           @method('delete')
           @csrf
           <div class="modal-content">
               <div class="modal-header">
                   <h5 style="font-family: 'Cairo', sans-serif;"
                       class="modal-title" id="exampleModalLabel">delete user</h5>
                   <button type="button" class="close" data-dismiss="modal"
                           aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <p> delete user <span class="text-danger">user name</span></p>
                   <input type="hidden" name="id" value="">
               </div>
               <div class="modal-footer">
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary"
                               data-dismiss="modal">close</button>
                       <button type="submit"
                               class="btn btn-danger">submit</button>
                   </div>
               </div>
           </div>
       </form>
   </div>
</div> --}}




<div class="modal fade" id="modalBasic{{ $user->id }}">
    <div class="modal-dialog" role="document">
        <form action="{{ route('users.destroy','test') }}" method="post">
            @method('delete')
            @csrf
            <div class="modal-content p-16">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title fw-6">delete user</h4>

                </div>
                <div class="modal-body fw-5 text-center">

                    <div class="modal-content">

                        <div class="modal-body">
                            <p> delete user <span class="text-danger">{{ $user->name }}</span></p>
                            <input type="hidden" name="id" value="{{ $user->id }}">
                        </div>

                        <div class="d-flex gap-16 mt-20">
                            <button type="button" type="submit" class="tf-btn secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button  type="submit" class="tf-btn primary">Save</button>
                        </div>

                    </div>


                </div>

            </div>
        </form>
    </div>
</div>
