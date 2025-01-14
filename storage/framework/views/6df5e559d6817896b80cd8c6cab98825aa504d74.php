

   <?php if(!$recipe->isFavorited()): ?>
      <a href="<?php echo e(route('recipes.favoriteAdd', $recipe->id)); ?>"
         class="btn btn-sm btn-maroon"
         title="Add Favorite">
         <i class="<?php echo e(config('icons.favorite')); ?> text-success"></i>
         <div class="d-none d-lg-inline">
            Add Favorite
         </div>
      </a>
   <?php else: ?>
      <a href="<?php echo e(route('recipes.favoriteRemove', $recipe->id)); ?>"
         class="btn btn-sm btn-maroon"
         title="Remove Favorite">
         <i class="<?php echo e(config('icons.favorite')); ?> text-danger"></i>
         <div class="d-none d-lg-inline">
            Remove Favorite
         </div>
      </a>
   <?php endif; ?>

<?php /**PATH C:\sites\l7\resources\views/UI/recipes/favoriteRecipes/grid/buttons/removeFavorite.blade.php ENDPATH**/ ?>