<?php $__env->startSection('formBegin'); ?>
   <form action="<?php echo e(route('admin.offerings.update', $offering)); ?>" method="POST" enctype="multipart/form-data" class="m-0 p-0">
      <?php echo method_field('PUT'); ?>
      <?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/offerings/edit/sections/formBegin.blade.php ENDPATH**/ ?>