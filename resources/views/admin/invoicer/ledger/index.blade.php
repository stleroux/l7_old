@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.invoicer-ledger') }}"></i>
	<span class="h3">Invoicer :: Ledger
		{{ (Request::is('admin/invoicer/ledger/estimates') ? '- Estimates':'') }}
		{{ (Request::is('admin/invoicer/ledger/logged') ? '- Logged':'') }}
		{{ (Request::is('admin/invoicer/ledger/invoiced') ? '- Invoiced':'') }}
		{{ (Request::is('admin/invoicer/ledger/paid') ? '- Paid':'') }}
		{{ (Request::is('admin/invoicer/ledger/unpaid') ? '- Unpaid':'') }}
	</span>
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Ledger</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.invoicer.ledger.topbar')

	<div class="card">

			@if($invoices->count() > 0)
				<table class="table table-hover table-stripped table-sm">
					<thead>
						<tr>
							<th>#</th>
							@if(Request::is('admin/invoicer/ledger/estimates'))
								<th>Create Date</th>
							@endif
							@if(Request::is('admin/invoicer/ledger/logged'))
								<th>Logged Date</th>
							@endif
							@if(Request::is('admin/invoicer/ledger/invoiced'))
								<th>Invoiced Date</th>
							@endif
							@if(Request::is('admin/invoicer/ledger/paid'))
								<th>Paid Date</th>
							@endif
							@if(Request::is('admin/invoicer/ledger'))
								<th>Status</th>
							@endif
							{{-- <th>@sortablelink('client.company_name','Company Name')</th> --}}
							<th>Last Name</th>
							<th>First Name</th>
							<th>Company Name</th>
							<th class="text-right">Charge</th>
							<th class="d-none d-md-table-cell text-right">HST</th>
							<th class="d-none d-md-table-cell text-right">Deposits</th>
							<th class="d-none d-md-table-cell text-right">Discounts</th>
							<th class="d-none d-md-table-cell text-right">Payments</th>
							{{-- <th class="d-none d-lg-table-cell text-right" title="SubTotal">@sortablelink('sub_total','SUB')</th> --}}
							{{-- <th class="d-none d-lg-table-cell text-right">@sortablelink('wsib','WSIB')</th> --}}
							{{-- <th class="d-none d-lg-table-cell text-right" title="Income Taxes">@sortablelink('income_taxes','IT')</th> --}}
							{{-- <th class="d-none d-sm-table-cell text-right" title="Total Deductions">@sortablelink('total_deductions','DED')</th> --}}
							<th class="text-right">Owed</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="bg-info">
							<td colspan="{{ (Request::is('admin/invoicer/ledger/unpaid') ? '4' : '5') }}" class="text-right"><b>Totals This Page :&nbsp;</b></td>
							<td class="text-right">{{ number_format($invoices->sum('amount_charged'), 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoices->sum('hst'), 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoices->sum('deposits'), 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoices->sum('discounts'), 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoices->sum('payments'), 2, '.', ', ') }}$</td>
							{{-- <td class="d-none d-lg-table-cell text-right">{{ number_format($invoices->sum('wsib'), 2, '.', ', ') }}$</td> --}}
							{{-- <td class="d-none d-lg-table-cell text-right">{{ number_format($invoices->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
							{{-- <td class="d-none d-sm-table-cell text-right">{{ number_format($invoices->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
							<td class="text-right">{{ number_format($invoices->sum('total'), 2, '.', ', ') }}$</td>
						</tr>
						<tr class="bg-info">
							<td colspan="{{ (Request::is('admin/invoicer/ledger/unpaid') ? '4' : '5') }}" class="text-right"><b>Overall Totals :&nbsp;</b></td>
							<td class="text-right">{{ number_format($amountCharged, 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($hst, 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($deposits, 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($discounts, 2, '.', ', ') }}$</td>
							<td class="d-none d-sm-table-cell text-right">{{ number_format($payments, 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($total, 2, '.', ', ') }}$</td>
						</tr>
					</tfoot>
					<tbody>
						@foreach($invoices as $invoice)
						<tr>
							<td>
								<a href="{{ route('admin.invoicer.invoices.show', $invoice->id) }}">{{ $invoice->id }}
							</td>
							
							@if(Request::is('admin/invoicer/ledger/estimates'))
								<td>{{ $invoice->created_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger/logged'))
								<td>{{ $invoice->created_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger/invoiced'))
								<td>{{ $invoice->invoiced_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger/paid'))
								<td>{{ $invoice->paid_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger'))
								<td>
									@if($invoice->status === 'quote')
										<span class="badge badge-steel" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@elseif($invoice->status === 'estimate')
										<span class="badge badge-info" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@elseif($invoice->status === 'invoiced')
										<span class="badge badge-warning" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@elseif($invoice->status === 'paid')
										<span class="badge badge-success" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@endif
								</td>
							@endif
							
							<td>
								@can('invoicer-client')
									<a href="{{ route('admin.users.show', $invoice->client_id) }}">{{ $invoice->client->last_name }}</a>
								@else
									{{ $invoice->client->last_name }}
								@endif
							</td>
							
							<td>
								@can('invoicer-client')
									<a href="{{ route('admin.users.show', $invoice->client_id) }}">{{ $invoice->client->first_name }}</a>
								@else
									{{ $invoice->client->first_name }}
								@endif
							</td>
							
							<td>
								{{ $invoice->client->company_name }}
							</td>
							
							<td class="text-right">{{ number_format($invoice->amount_charged, 2, '.' , ', ') }}$</td>
							
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoice->hst, 2, '.' , ', ') }}$</td>
							
							<td class="d-none d-lg-table-cell text-right">
								@php
									$depositAdd = DB::table('invoicer__activities')->where('activity', 'depositAdd')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$depositRemove = DB::table('invoicer__activities')->where('activity', 'depositRemove')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$depositTotal = $depositAdd - $depositRemove;

								@endphp
								{{-- {{ DB::table('invoicer__activities')->where('activity', 'depositAdd')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount')) }} --}}


								{{-- {{ DB::table('invoicer__activities')->where('activity', 'depositRemove')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount')) }} --}}
																				{{ number_format($depositTotal, 2, '.' , ', ') }}$
																				{{-- {{ $depositTotal }} --}}



							</td>
							<td class="d-none d-lg-table-cell text-right">
								@php
									$discountAdd = DB::table('invoicer__activities')->where('activity', 'discountAdd')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$discountRemove = DB::table('invoicer__activities')->where('activity', 'discountRemove')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$discountTotal = $discountAdd - $discountRemove;
								@endphp
								{{-- {{ DB::table('invoicer__activities')->where('activity', 'discountAdd')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount')) }} --}}
								{{-- {{ DB::table('invoicer__activities')->where('activity', 'discountRemove')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount')) }} --}}
								{{ number_format($discountTotal, 2, '.' , ', ') }}$
								{{-- {{ $discountTotal }} --}}
							</td>
							<td class="d-none d-lg-table-cell text-right">
								@php
									$paymentAdd = DB::table('invoicer__activities')->where('activity', 'paymentAdd')
									   										->where('invoice_id', $invoice->id)
								   											->sum(\DB::raw('invoicer__activities.amount'));
									$paymentRemove = DB::table('invoicer__activities')->where('activity', 'paymentRemove')
																				->where('invoice_id', $invoice->id)
								   											->sum(\DB::raw('invoicer__activities.amount'));
									$paymentTotal = $paymentAdd - $paymentRemove;
								@endphp
								{{-- {{ DB::table('invoicer__activities')->where('activity', 'paymentAdd')
									   										->where('invoice_id', $invoice->id)
								   											->sum(\DB::raw('invoicer__activities.amount')) }} -
								{{ DB::table('invoicer__activities')->where('activity', 'paymentAdd')
																				->where('invoice_id', $invoice->id)
								   											->sum(\DB::raw('invoicer__activities.amount')) }} --}}
								{{ number_format($paymentTotal, 2, '.' , ', ') }}$



							</td>
								{{-- <td class="d-none d-sm-table-cell text-right">{{ number_format($invoice->wsib, 2, '.' , ', ') }}$</td> --}}
								{{-- <td class="d-none d-sm-table-cell text-right">{{ number_format($invoice->income_taxes, 2, '.' , ', ') }}$</td> --}}
							{{-- <td class="d-none d-sm-table-cell text-right">{{ number_format($invoice->total_deductions, 2, '.' , ', ') }}$</td> --}}
							<td class="text-right">{{ number_format($invoice->total, 2, '.' , ', ') }}$</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<div class="card-body">
					No records found in the system.
				</div>
			@endif

		@if($invoices->count() > 0)
			<div class="card-footer p-2">
				<div class="row d-flex">
					<div class="col">
						Showing records {{ $invoices->firstItem() }} to {{ $invoices->lastItem() }} of {{ $invoices->total() }}
					</div>
					<div class="col d-flex justify-content-end">
						{!! $invoices->appends(request()->except('page'))->render() !!}
					</div>
				</div>
			</div>
		@endif
	</div>

@endsection
