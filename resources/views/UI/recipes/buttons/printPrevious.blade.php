<a href="{{ url()->previous() }}"
   class="btn {{ $size ? 'btn-'.$size : '' }} btn-maroon d-print-none"
   title="Back">
   <i class="{{ config('icons.back') }}"></i>
   {{-- Back --}}
   {{ $btn_label ?? '' }}
</a>