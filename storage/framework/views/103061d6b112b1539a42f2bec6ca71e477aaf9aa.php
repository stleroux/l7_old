<?php if($offerings->count() > 0): ?>

   
   <table class="table table-hover table-sm" id="datatable">

      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            
            <th>Name</th>
            <th>Category</th>
            
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $offerings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offering): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="<?php echo e($offering->id); ?>"
                     id="<?php echo e($offering->id); ?>" />
                     <label for="<?php echo e($offering->id); ?>"></label>
                  </div>
               </td>
               
               <td><a href="<?php echo e(route('admin.offerings.show', $offering->id)); ?>"><?php echo e(ucwords($offering->name)); ?></a></td>
               
               <td>
                  
                  <?php echo e(ucwords(\App\Models\Offering::where(['id' => $offering->category])->pluck('name')->first())); ?>

               </td>

               
               <td class="text-right">
                  <?php echo $__env->make('admin.offerings.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>

   </table>
   
<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/index/grid.blade.php ENDPATH**/ ?>