<div class="row-col mb-2 text-right">

   <button type="submit" class="btn btn-sm btn-success" name="submit" value="save">
      <i class="{{ config('icons.save') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Close
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-info" name="submit" value="continue">
      <i class="{{ config('icons.save_continue') }}"></i>
      <div class="d-none d-lg-inline">
         Save and Continue
      </div>
   </button>

   <button type="submit" class="btn btn-sm btn-primary" name="submit" value="new">
      <i class="{{ config('icons.save_new') }}"></i>
      <div class="d-none d-lg-inline">
         Save and New
      </div>
   </button>

   <button type="reset" class="btn btn-sm btn-light border">
      <i class="{{ config('icons.reset') }}"></i>
      <div class="d-none d-lg-inline">
         Reset Form
      </div>
   </button>

   <a href="{{ route('features.index') }}" class="btn btn-sm btn-light border">
      <i class="{{ config('icons.back') }}"></i>
      <div class="d-none d-lg-inline">
         Cancel
      </div>
   </a>

   <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
      <i class="{{ config('icons.help') }}"></i>
      <div class="d-none d-lg-inline">
         Help
      </div>
   </a>
   
</div>
