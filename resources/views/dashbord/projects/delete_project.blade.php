
<div class="modal fade" id="delete_project{{ $project->id }}">
    <div class="modal-dialog" role="document">
        <form action="{{ route('projects.destroy','test') }}" method="post">
            @method('delete')
            @csrf
            <div class="modal-content p-16">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title fw-6">delete user</h4>

                </div>
                <div class="modal-body fw-5 text-center">

                    <div class="modal-content">

                        <div class="modal-body">
                            <p> delete project <span class="text-danger">{{ $project->name }}</span></p>
                            <input type="hidden" name="id" value="{{ $project->id }}">
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
