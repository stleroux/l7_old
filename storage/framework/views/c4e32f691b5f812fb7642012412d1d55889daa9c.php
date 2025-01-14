<div class="card mb-2 card-trans-4 bg-info">
   
   <div class="card-header p-2">
      <i class="<?php echo e(config('icons.tags')); ?>"></i>
      Tags
   </div>
   
   <div class="card-body card-trans-6 p-1 m-0">

      <a href="<?php echo e(route('projects.index')); ?>"
         class="btn btn-xs btn-block btn-<?php echo e(!request('tag') ? 'dark' : 'secondary'); ?> mt-1">
         All Tags
      </a>

      <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <?php if(request('filter')): ?>
            <a href="<?php echo e(route('projects.index', ['filter'=>request('filter'), 'tag'=>$t->name])); ?>"
               class="btn btn-xs btn-<?php echo e(request()->is('projects/*/'.$t->name) ? 'dark' : 'secondary'); ?> mt-1">
               <?php echo e($t->name); ?>

            </a>
         <?php else: ?>
            <a href="<?php echo e(route('projects.index', ['filter'=>'all', 'tag'=>$t->name])); ?>"
               class="btn btn-xs btn-<?php echo e(request()->is('projects/*/'.$t->name) ? 'dark' : 'secondary'); ?> mt-1">
               <?php echo e($t->name); ?>

            </a>
         <?php endif; ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
   
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/blocks/tags.blade.php ENDPATH**/ ?>