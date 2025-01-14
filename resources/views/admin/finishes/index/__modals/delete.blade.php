<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content bg-danger">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Delete Finish?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <form action="" method="post" id="deleteForm">
            @csrf
            {{-- @method('DELETE') --}}

            <div class="modal-body">
               Are you sure you want to PERMANENTLY delete this finish?
            </div>
            
            <div class="modal-footer">
               <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
               <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
         </form>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
