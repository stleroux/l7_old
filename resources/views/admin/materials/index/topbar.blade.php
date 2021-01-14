<div class="row mb-2">

   <div class="col">
      @if(Route::currentRouteName() == 'admin.materials.index')
         @can('material-create')
            <a href="{{ route('admin.materials.create') }}" class="btn btn-sm btn-success">
               <i class="{{ config('icons.add') }}"></i>
               Create Material
            </a>
         @endcan
      @endif
   </div>

   <div class="col">

      <div class="float-right">
         <div class="dropdown text-center float-right">
            <a class="dropdown-button border"
               id="dropdown-menu"
               data-toggle="dropdown"
               data-boundary="viewport"
               aria-haspopup="true"
               aria-expanded="false">
               <i class="{{ config('icons.ellipsis') }} mx-3"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdown-menu">
               @can('material-manage')
                  <a href="{{ route('admin.materials.index') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.materials') }}"></i>
                     All Materials
                  </a>
               @endcan
               @can('material-delete')
                  <a href="{{ route('admin.materials.trashed') }}" class="dropdown-item bg-light">
                     <i class="{{ config('icons.trashed') }} text-danger"></i>
                     Trashed Materials
                  </a>
               @endcan
            </div>
         </div>
      </div>

      <div class="float-right px-1">         
         <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
            <i class="{{ config('icons.help') }}"></i>
            Help
         </a>
      </div>

      @if(Route::currentRouteName() == 'admin.materials.index')
         <form action="{{ route('admin.materials.mass_destroy') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_destroy_ids" id="mass_destroy_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-pink"
               id="btn_multidestroy"
               style="display:none"
               data-target="#massDestroy-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Trash Selected
            </a>
         </form>
      @endif

      @if(Route::currentRouteName() == 'admin.materials.trashed')
         <form action="{{ route('admin.materials.mass_delete') }}" method="post" class="float-right p-0 pl-1">
            @csrf
            @method('DELETE')
            <input type="hidden" name="mass_delete_ids" id="mass_delete_ids" value="" size="3" />
            <a data-toggle="modal"
               class="btn btn-sm bg-danger"
               id="btn_multidelete"
               style="display:none"
               data-target="#massDelete-modal">
               <i class="{{ config('icons.trash') }}"></i>
               Delete Selected
            </a>
         </form>

         <form action="" method="POST" class="float-right p-0 pl-1">
            @csrf
            <input type="hidden" name="mass_restore_ids" id="mass_restore_ids" value="" size="3" />
            <a 
               data-toggle="modal"
               class="btn btn-sm bg-primary"
               id="btn_multirestore"
               style="display:none"
               data-target="#massRestore-modal">
               <i class="{{ config('icons.restore') }}"></i>
               Restore Selected
            </a>
         </form>
      @endif
      
   </div>
</div>