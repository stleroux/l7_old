{{-- Used in Recipe index page to add butotn to each recipe card --}}
{{-- @if(checkPerm('recipe_browse')) --}}
   @if(!$recipe->isFavorited())
      <a href="{{ route('recipes.favoriteAdd', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
         title="Add Favorite">
         <i class="{{ config('icons.favorite') }} text-success"></i>
         <div class="d-none d-lg-inline">
            Add {{ $btn_label ?? '' }}
         </div>
      </a>
   @else
      <a href="{{ route('recipes.favoriteRemove', $recipe->id) }}"
         class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon"
         title="Remove Favorite">
         <i class="{{ config('icons.favorite') }} text-danger"></i>
         <div class="d-none d-lg-inline">
            Remove {{ $btn_label ?? '' }}
         </div>
      </a>
   @endif
{{-- @endif --}}
