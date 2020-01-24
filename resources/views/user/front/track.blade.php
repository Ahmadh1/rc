@extends('layouts.master')
@section('title', 'Tarck your Order')
	@section('theme')
			<!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Track Order</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Order details --}}
        <div class="page-content">
            <div class="container">
                	<div class="panel-cart-content">
		                <table class="table-cart">
		                	<thead>
							<tr>
								<th>#</th>
								<th>Date</th>
								<th>Status</th>
								<th>Total</th>
								<th>Details</th>
							</tr>
							</thead>
							<tbody>
								@if ($user->order->count() > 0)
									@php
                                	$counter = 1;
                                @endphp
	                            	@foreach ($user->order as $order)
										<tr>
											<td>{{ $counter++ }}</td>
											<td>{{ Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}</td>
											<td>
												@if ($order->status)
	                                    	Confirmed
	                                    @else
	                                    	Processing
	                                    @endif
											</td>
											<td>
											
	                                    		Rs.{{ $order->orderItems[0]->price }}
											</td>
											<td>
												<a href="{{ route('user.order', ['id' => $order->id]) }}" class="btn btn-outline-secondary"><span>View</span></a>
											</td>
										</tr>
									@endforeach
								@else
									<th colspan="5" class="text-center text-danger">
										No Order start <a href="{{ url('/menu') }}">Shop</a> now!
									</th>
								@endif
								
							</tbody>
						</table>
			</div>
                </div>
        </div>
@stop