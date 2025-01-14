

<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/UI/recipes.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
<i class="<?php echo e(config('icons.recipes')); ?>"></i>
Recipes :: <?php echo e($recipe->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item">
   <a href="<?php echo e(route('recipes.indexGrid', 'all')); ?>" class="">Recipes</a>
</li>
<li class="breadcrumb-item active"><?php echo e($recipe->title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php echo $__env->make('UI.recipes.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('UI.recipes.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('UI.recipes.show.leave_comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row pb-2">

   <div class="col">
      <div class="text-center">
         <?php if($byCatName): ?>
         <?php echo $__env->make('UI.recipes.buttons.previous', ['size'=>'sm', 'btn_label'=>'Previous', $previous, $byCatName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('UI.recipes.buttons.next', ['size'=>'sm', 'btn_label'=>'Next', $next, $byCatName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php else: ?>
         <?php echo $__env->make('UI.recipes.buttons.previousAll', ['size'=>'sm', 'btn_label'=>'Previous', $previous], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('UI.recipes.buttons.nextAll', ['size'=>'sm', 'btn_label'=>'Next', $next], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php endif; ?>
      </div>
   </div>

   <div class="col">
      <div class="text-right">
         <div class="btn-group">
            <?php if(auth()->guard()->check()): ?>
            <div class="form-inline float-right p-0 m-0">
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('like', $recipe)): ?>
                  <form class="p-0 m-0" action="<?php echo e(route('like')); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <input type="hidden" name="likeable_type" value="<?php echo e(get_class($recipe)); ?>"/>
                     <input type="hidden" name="id" value="<?php echo e($recipe->id); ?>"/>
                     <button class="btn btn-sm btn-success"><?php echo app('translator')->get('Like'); ?></button>
                  </form>
               <?php else: ?>
                  <form class="" action="<?php echo e(route('unlike')); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('DELETE'); ?>
                     <input type="hidden" name="likeable_type" value="<?php echo e(get_class($recipe)); ?>"/>
                     <input type="hidden" name="id" value="<?php echo e($recipe->id); ?>"/>
                     <button class="btn btn-sm btn-danger"><?php echo app('translator')->get('Unlike'); ?></button>
                  </form>
               <?php endif; ?>
            </div>
            <?php endif; ?>

            <a href="<?php echo e(Session::get('fromPage')); ?>" class="btn btn-sm btn-maroon">
               <i class="<?php echo e(config('icons.back')); ?>"></i>
               Recipes
            </a>

            <?php if(url()->previous() == request()->root() . '/UI/search'): ?>
               <a href="#" class="btn btn-sm btn-maroon" onclick="history.back()">Search Results</a>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
               <?php echo $__env->make('UI.recipes.buttons.print', ['size'=>'sm', 'btn_label'=>'Print'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('UI.recipes.buttons.printPDF', ['size'=>'sm', 'btn_label'=>'Print PDF'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('UI.recipes.buttons.favorite', ['size'=>'sm', 'btn_label'=>'Favorite'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
         </div>
      </div>
   </div>

</div>

<div class="card card-trans-2 mb-3">

   <div class="card-body p-2">
      <div class="row">
         <?php echo $__env->make('UI.recipes.show.ingredients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('UI.recipes.show.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <?php echo $__env->make('UI.recipes.blocks.view_more', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(auth()->guard()->check()): ?>
         <div class="row">
            <?php echo $__env->make('UI.recipes.show.methodology', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

         <div class="row">
            <?php echo $__env->make('UI.recipes.show.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.servings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.prep_time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.cook_time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.source', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.publishDate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.author', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="row">
            <?php echo $__env->make('UI.recipes.show.views', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.viewsLastMonth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.likes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

         <div class="row">
            <?php echo $__env->make('UI.recipes.show.public_notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('UI.recipes.show.private_notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      <?php endif; ?>

      <div class="row">
         <div class="col">
            <?php echo $__env->make('UI.recipes.show.comments', ['model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>

   </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/recipes/show.blade.php ENDPATH**/ ?>