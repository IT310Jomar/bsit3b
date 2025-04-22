

<div class="modal editlocationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Location</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="text" class="locationID" hidden readonly>
            
            <div class="form-group">
                <label for="editLocation">Location Name</label>
                <input type="email" class="form-control" id="editLocation"  placeholder="Enter Location">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary editBtn">Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
        </div>
      </div>
    </div>
  </div>