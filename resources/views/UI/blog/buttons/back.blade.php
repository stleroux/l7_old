<a href="{{ Session::get('fromPage') }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light d-print-none"
   title="Back">
   <i class="{{ config('buttons.back') }}"></i>
   {{ $btn_label ?? '' }}
</a>
