@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.invoicer-dashboard') }}"></i>
   Invoicer :: Dashboard
@endsection

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li> --}}
   <li class="breadcrumb-item">Invoicer</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	<div class="card">

		<div class="card-body">
			<div class="row">
				<div class="col-12">
					@include('admin.invoicer.dashboard.inc.totals')
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-xs-12 col-sm-3">
					@include('admin.invoicer.dashboard.inc.invoices')
				</div>

				<div class="col-xs-12 col-sm-6">
					@include('admin.invoicer.dashboard.inc.owingClients')
					@include('admin.invoicer.dashboard.inc.bestClients')
				</div>

				<div class="col-xs-12 col-sm-3">
					@include('admin.invoicer.dashboard.inc.products')
				</div>
			</div>
		</div>

		<div class="card-footer p-2">
			<span class="float-right">
				<small>V {{ config('invoicer.version') }}</small>
			</span>		
		</div>

	</div>

@endsection
