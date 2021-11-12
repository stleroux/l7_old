<?php if (! empty(trim($__env->yieldContent('breadcrumb')))): ?>
   <div class="ml-auto">
      <ol class="breadcrumb float-sm-right p-0 m-0 px-1">
         <li class="breadcrumb-item">
            <?php if(Route::currentRouteName() != 'homepage'): ?>
               <a href="<?php echo e(route('homepage')); ?>" class="">
                  Home
               </a>
            <?php endif; ?>
         </li>
         <?php echo $__env->yieldContent('breadcrumb'); ?>
      </ol>
   </div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/UI/common/breadcrumb.blade.php ENDPATH**/ ?>