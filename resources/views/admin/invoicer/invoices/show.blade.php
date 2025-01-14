@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
	<i class="{{ config('icons.edit') }}"></i>
	Invoicer :: Show 
	@if($invoice->status == 'quote' || $invoice->status == 'estimate')
		{{ Str::ucfirst($invoice->status) }}
	@else
		Invoice
	@endif
	 # {{ $invoice->id }}
@endsection

@section('breadcrumb')
{{--    <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
	@if($invoice->status == "estimate")
		<li class="breadcrumb-item"><a href="{{ route('admin.invoicer.invoices.estimates') }}">Estimates</a></li>
	@else
		<li class="breadcrumb-item"><a href="{{ route('admin.invoicer.invoices') }}">Invoices</a></li>
	@endif
   <li class="breadcrumb-item">Show</li> --}}
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.invoicer.invoices.show.topbar')

	<div class="card pb-0 mb-3">

		<div class="card-header">
			@include('admin.invoicer.invoices.show.inc.header')
		</div>
		
		<div class="card-body">
			@include('admin.invoicer.invoices.show.inc.top')
			@include('admin.invoicer.invoices.show.inc.billables')
			@include('admin.invoicer.invoices.show.inc.bottom')
		</div>

	</div>

	{{-- @include('common.audits') --}}

@endsection
				