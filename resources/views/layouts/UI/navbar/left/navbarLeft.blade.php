<ul class="navbar-nav mr-auto ml-auto">

   @if(Config::get('settings.carvings') == 'visible')
      <li class="nav-item {{ Route::is('carvings*') ? 'bg-black border-red-2' : '' }} {{ Route::is('offerings*') ? 'bg-black border-red-2' : '' }}">
         <a class="nav-link text-light py-1 m-0" href="{{ route('carvings.index') }}">
            <i class="{{ config('icons.carvings') }} mr-1"></i>
            {{ __('Carvings') }}               
         </a>
      </li>
   @endif

   @if(Config::get('settings.projects') == 'visible')
      <li class="nav-item {{ Route::is('projects*') ? 'bg-black border-red-2' : '' }}">
         <a class="nav-link text-light py-1 m-0" href="{{ route('projects.index') }}">
            <i class="{{ config('icons.projects') }}"></i>
            {{ __('Projects') }}
         </a>
      </li>
   @endif

   @if(Config::get('settings.recipes') == 'visible')
      <li class="nav-item {{ Route::is('recipes*') ? 'bg-black border-red-2' : '' }}">
         <a class="nav-link text-light py-1 m-0" href="{{ route('recipes.indexGrid', 'all') }}">
            <i class="{{ config('icons.recipes') }}"></i>
            {{ __('Recipes') }}
         </a>
      </li>
   @endif

   @if(Config::get('settings.blog') == 'visible')
      <li class="nav-item {{ Route::is('blog*') ? 'bg-black border-red-2' : '' }}">
         <a class="nav-link text-light py-1 m-0" href="{{ route('blog.index') }}">
            <i class="{{ config('icons.blog') }}"></i>
            {{ __('Blog') }}
         </a>
      </li>
   @endif

   @if(Config::get('settings.darts') == 'visible')
      @can('dart-access')
         <li class="nav-item {{ Route::is('darts*') ? 'bg-black border-red-2' : '' }}">
            <a class="nav-link text-light py-1 m-0" href="{{ route('darts.index') }}">
               <i class="{{ config('icons.darts') }}"></i>
               {{ __('Darts') }}
            </a>
         </li>
      @endcan
   @endif

   <li class="nav-item {{ Route::is('about*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link text-light py-1 m-0" href="{{ route('about') }}">
         <i class="{{ config('icons.about-us') }}"></i>
         {{ __('About us') }}
      </a>
   </li>
   
   <li class="nav-item {{ Route::is('contact*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link text-light py-1 m-0" href="{{ route('contact') }}">
         <i class="{{ config('icons.contact-us') }}"></i>
         {{ __('Contact us') }}
      </a>
   </li>

{{--    <li class="nav-item {{ Route::is('members*') ? 'bg-black border-red-2' : '' }}">
      <a class="nav-link text-light py-1 m-0" href="{{ route('members') }}">
         <i class="{{ config('icons.users') }}"></i>
         Members
      </a>
   </li> --}}

</ul>
