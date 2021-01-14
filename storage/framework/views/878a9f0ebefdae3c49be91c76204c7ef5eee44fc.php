<!-- APPNAME -->

<div class="form-group">

   <label for="appName" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'App Name'); ?>

   </label>
   
   <input
      type="text"
      name="appName"
      id="appName"
      class="form-control <?php $__errorArgs = ['appName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('appName') ?? Config::get('settings.appName')); ?>"
      placeholder="appName"
      data-inputmask=""
   />
   <small>The name of the application as it will apppear throughout the site</small>
   
   <?php $__errorArgs = ['appName'];
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

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/appName.blade.php ENDPATH**/ ?>