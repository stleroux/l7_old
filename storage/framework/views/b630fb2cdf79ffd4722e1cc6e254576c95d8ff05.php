<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      <?php echo $__env->make('admin.actions.common.create', ['modelName'=>'offering'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(Route::currentRouteName() == 'admin.offerings.index'): ?>
         
         
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'offering'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.offerings.trashed'): ?>
         <?php echo $__env->make('admin.actions.mass.restore', ['modelName'=>'offering'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.delete', ['modelName'=>'offering'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/index/blocks/actions.blade.php ENDPATH**/ ?>