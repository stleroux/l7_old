@if(checkPerm('project_read'))
   <a href="{{ route('admin.projects.finishes.show', $finish->id) }}"
      class="btn {{ $size ? 'btn-'.$size : '' }} btn-primary text-light"
      title="Show Finish">
      <i class="{{ config('icons.show') }}"></i>
      {{ $btn_label ?? '' }}
   </a>
@endif
