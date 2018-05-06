 <!-- Edit Button/Trigger Modal -->
<button 
    type="button" 
    class="btn btn-primary" 
    data-toggle="modal" 
    data-target="#edit-modal">
    Edit Task
</button>

 <!-- Edit Modal -->
<div class="modal" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Task</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>    
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                 <div class="col-sm-6">
                    <form action="/edit/{{$id}}" method="POST" class="form-horizontal">
                        @method('PATCH')
                        @csrf
                        <div class="form-group task-edit">
                            <div class="col-md-offset-6">
                                <input type="text" name="body" class="form-control">
                            </div>
                        </div>
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-6">
                                <button type="submit" class="btn btn-secondary">
                                  Submit 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
