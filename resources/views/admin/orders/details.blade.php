@extends('layouts.app')
@section('title', 'Order Detail')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Order Detail</div>
                <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Quantity</th>
                          <th>Address</th>
                          <th>Price</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{ $order->id }}</td>
                          <td>{{ Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}</td>
                          <td>{{ $order->OrderItems[0]->quantity }}</td>
                          <td>{{ $order->address }}</td>
                          <td>{{ $order->OrderItems[0]->price }}</td>
                          <td>
                            @if ($order->status)
                              <p class="text-success">confirmed</p>
                            @else
                              <p class="text-muted">pending</p>
                            @endif
                          </td>
                      </tbody>
                    </table>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
            <div class="card-header">User Details</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Registered on</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $order->user->id }}</td>
                      <td>{{ $order->user->name }}</td>
                      <td>{{ $order->user->email }}</td>
                      <td>{{ Carbon\Carbon::parse($order->user->created_at)->toFormattedDateString() }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <hr>
        </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dish Details</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            @foreach ($order->dishes as $dish)
                            <table>
                              <tr>
                                <td>
                                  {{ $dish->title }}
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
                                  {{ $item->price }}
                                 </td>
                               </tr>
                             </table>
                             @endforeach
                          </td>
                          <td>
                            @foreach ($order->orderItems as $item)
                            <table>
                              <tr>
                                <td>
                                  {{ $item->quantity }}
                                </td>
                              </tr>
                            </table>
                            @endforeach
                          </td>
                          <td>
                            @foreach ($order->dishes as $dish)   
                            <table>
                              <tr>
                                <td>
                                  <img src="{{ url('uploads') . '/' . $dish->image }}" alt="" style="width: 50px;">
                                </td>
                              </tr>
                            </table>
                            @endforeach
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('orders') }}">back to orders</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
