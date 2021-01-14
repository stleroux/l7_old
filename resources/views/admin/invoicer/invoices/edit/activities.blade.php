<div class="card pt-2">

	<div class="card-header">
		<span class="h3">Activity</span>
		{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
			{{-- @if($invoice->status == 'invoiced') --}}
			{{-- @if($invoice->status == 'logged') --}}
@if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0)
				<span class="float-right">
					<a href="{{ route('admin.invoicer.activities.create', $invoice) }}" class="btn btn-sm btn-primary">
						<i class="far fa-plus-square"></i>
						New Activity
					</a>
				</span>
			@endif
		{{-- @endif --}}
	</div>

	{{-- <div class="card-body"> --}}
		@if($invoice->activities->count() > 0)
			<table class="table table-sm table-striped">
				<thead>
					<tr class="d-flex">
						<th class="col-1">ID</th>
						<th class="col-2">Date</th>
						<th class="col-5">Activity Type</th>
						<th class="col-2">Amount</th>
						<th class="col-2"></th>
					</tr>
				</thead>
				<tbody>
					{{-- @foreach($invoice->invoiceItems->sortByDesc('work_date') as $item) --}}
					@foreach($invoice->activities as $item)
						<tr class="d-flex">
							<td class="col-1">{{ $item->id }}</td>
							<td class="col-2"nowrap="nowrap">{{ $item->created_at }}</td>
							<td class="col-5">{{ $item->activity }}</td>
							<td class="col-2" nowrap="nowrap">$ {{ $item->amount }}</td>
							<td class="col-2">
								<form action="{{ route('admin.invoicer.activities.destroy',[$item->id]) }}" method="POST" onsubmit="return confirm('Do you really want to delete this activity item?');"
										class="float-right">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE" />

										{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
										{{-- @if($invoice->status == 'logged') --}}
										@if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0)
											<a href="{{ route('admin.invoicer.activities.edit', $item->id) }}" class="btn btn-sm btn-primary">
												<i class="fa fa-edit"></i>
												Edit
											</a>
										{{-- @endif --}}
										
										{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
											<button type="submit" class="btn btn-sm btn-danger">
												<i class="fa fa-trash-alt"></i>
												Delete
											</button>
										@endif
									</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="card-body">
				No activities found for this invoice.
			</div>
		@endif
	{{-- </div> --}}
</div>