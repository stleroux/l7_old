<!-- MODEL NAME -->
<div class="col-6">

   <div class="form-group">

      <label for="modelName" class="required">Model Name</label>

      <input
         type="text"
         name="modelName"
         class="form-control form-control-sm <?php $__errorArgs = ['modelName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         placeholder="Model Name">

      <?php $__errorArgs = ['modelName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
         </span>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/permissions/forms/fields/modelName.blade.php ENDPATH**/ ?>