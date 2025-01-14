<!-- HELP MODAL -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document"> <!-- modal-dialog-centered -->
      <div class="modal-content">
         <div class="modal-header bg-primary p-2 m-0">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="<?php echo e(config('icons.darts')); ?>"></i>
               Baseball Help
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body m-0 p-0">

            <div class="card m-0 p-0">
               <div class="card-body p-2 m-0">
                  <?php echo $__env->make('UI.darts.baseball.help.details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('UI.darts.baseball.help.alsoKnownAs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('UI.darts.baseball.help.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('UI.darts.baseball.help.howToPlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('UI.darts.baseball.help.rulesOfPlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('UI.darts.baseball.help.howToWin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>

         </div>
            
         <div class="modal-footer p-0 mx-auto">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
         </div>
      
      </div> <!-- modal content -->
   
   </div><!-- modal dialog -->

</div><!-- modal -->
<?php /**PATH C:\sites\l7\resources\views/UI/darts/baseball/help/help.blade.php ENDPATH**/ ?>