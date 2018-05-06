<button 
    type="button" 
    class="btn btn-primary" 
    data-toggle="modal" 
    data-target="#editModal">
  Edit Task
</button>
<div class="modal" id="editModal" 
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
      <div class="modal-body">
        <div class="col-sm-6">
          <input type="text" name="body" id="task-edit" class="form-control">
        </div>
      <div class="modal-footer">
        <button type="button" 
          class="btn btn-default" 
          data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Submit
          </button>
        </span>
      </div>
    </div>
  </div>
</div>
