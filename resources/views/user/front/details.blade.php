@extends('layouts.master')
@section('title', 'Order Details')
@section('theme')
	<!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Order Details</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
						 <table class="table">
	                            <thead>
	                                <tr>
	                                    <th>Title</th>
	                                    <th>Prices</th>
	                                    <th>Quantity</th>
	                                    <th>Total</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    <td class="wide-column">
                                    	@foreach ($order->dishes as $d)
                                    	<table>
                                    		<tr>
                                    			<td>
                                    				{{ $d->title }}
                                    			</td>
                                    		</tr>
                                    	</table>
           								 @endforeach
                                    </td>
	                                    
	                                    <td class="wide-column">
	                                   @foreach ($order->Dishes as $item)    
							              <table>
							              	<tr>
							              		<td>
							              			${{ $item->price }}
							              		</td>
							              	</tr>
							              </table>
	                                   @endforeach
	                                	</td>
	                                    <td>
	                                    @foreach ($order->OrderItems as $item)    
							              <table>
							              	<tr>
							              		<td>
							              			{{ $item->quantity }}
							              		</td>
							              	</tr>
							              </table>
							             @endforeach	
	                                    </td>
	                                    
	                                </tr>
	                                <th colspan="3">
	                                	<td class="text-danger">
	                                    	{{ $order->orderItems[0]->price }}
	                                    </td>
	                                </th>
	                            </tbody>
	                        </table>
                	</div>
            </div>
        </div>
@stop