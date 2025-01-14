<?php echo $__env->make('layouts.common.navbar.languages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Authentication Links -->
<li class="nav-item">
   <a class="nav-link <?php echo e(Route::is('login*') ? 'bg-secondary text-light' : ''); ?> p-2 m-0" href="<?php echo e(route('login')); ?>">
      <i class="<?php echo e(config('icons.login')); ?>"></i>
      <?php echo e(__('Login')); ?>

   </a>
</li>

<?php if(Route::has('register')): ?>
   <li class="nav-item <?php echo e(Route::is('register') ? 'bg-secondary text-light' : ''); ?>">
      <a class="nav-link p-2 m-0" href="<?php echo e(route('register')); ?>">
         <i class="<?php echo e(config('icons.register')); ?>"></i>
         <?php echo e(__('Register')); ?>

      </a>
   </li>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/UI/navbar/right/authLinks.blade.php ENDPATH**/ ?>