 <!-- Edit Button/Trigger Modal -->
<button 
    type="button" 
    class="btn btn-primary" 
    data-text={{$text}}
    data-toggle="modal" 
    data-target="#edit-modal">
  Edit Task
</button>

 <!-- Edit Modal -->
<div class="modal" id="edit-modal" 
    tabindex="-1" role="dialog" 
    aria-labelledby="editModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="editModalLabel">Edit Task</h4>
      </div>
  
       <!-- Modal Body -->
      <div class="modal-body">
        <div class="col-sm-6">
          <form action="/edit/{{$id}}" method="POST" class="form-horizontal">
            @method('PATCH')
            @csrf
            <div class="form-group">
              <div class="col-sm-6">
                  <input type="text" name="body" id="task-body" class="form-control">
              </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
