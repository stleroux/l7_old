<form action="<?php echo e(route('admin.carvings.mass_destroy')); ?>" method="post" class="">
   <?php echo csrf_field(); ?>
   <?php echo method_field('DELETE'); ?>
   <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" class="bg-danger" size="3" />
   <a data-toggle="modal"
      class="btn btn-block btn-outline-pink mt-2"
      id="btn_multidestroy"
      style="display:none"
      data-target="#massDestroy-modal">
      <i class="<?php echo e(config('icons.trash')); ?>"></i>
      Trash Selected
   </a>
</form>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/actions/mass/destroy.blade.php ENDPATH**/ ?>