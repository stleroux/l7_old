<!-- HELP MODAL -->
<div class="modal bg-secondary" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content text-dark">
         <div class="modal-header bg-primary p-2 m-0">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="{{ config('icons.features') }}"></i>
               Feature Request Help
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body m-0 p-0">

            <div class="card m-0 p-0">
               <div class="card-body p-2 m-0">
<!----------------------------------------------------------------------------------------->

@if(View::exists('help.UI.features.edit.introduction'))
    @include('help.UI.features.edit.introduction')
@endif

@if(View::exists('help.UI.features.edit.howTo'))
   @include('help.UI.features.edit.howTo')
@endif

@if(View::exists('help.UI.features.edit.fields'))
   @include('help.UI.features.edit.fields')
@endif

@if(View::exists('help.UI.features.edit.actions'))
   @include('help.UI.features.edit.actions')
@endif

<!----------------------------------------------------------------------------------------->
               </div><!-- card-body -->
            </div><!-- card -->
      
         </div><!-- modal body -->

         <div class="modal-footer p-0 mx-auto">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
         </div>

      </div><!-- modal content -->

   </div><!-- modal dialog -->

</div><!-- modal
