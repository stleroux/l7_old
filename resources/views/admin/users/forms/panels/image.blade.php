@if(Route::currentRouteName('') == 'admin.users.create')
	<div class="card card-primary">
@else
	<div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
@endif

   <div class="card-header">
      <div class="card-title">Profile Image</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         IMAGE
      </div>

   </div>

</div>