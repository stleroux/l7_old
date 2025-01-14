<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.faqs.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.faqs.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.faqs') }}"></i>
         All Questions
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Faq::count() }}
         </div>
      </a>

      <a href="{{ route('admin.faqs.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.faqs.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Questions
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Faq::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
