@extends('layouts.app')
@section('title', 'Orders')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>View</th>
                                    <th>Action</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($orders->count() > 0)
                                    @foreach ($orders as $o)
                                        <tr>
                                            <td>
                                                {{ $o->user->name }}
                                            </td>
                                            <td>
                                                {{ $o->city }}
                                            </td>
                                            <td>
                                                {{ $o->address }}
                                            </td>
                                            <td>
                                                {{ $o->phone }}
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($o->created_at)->toDayDateTimeString() }}
                                            </td>
                                            <td>
                                              @if ($o->status)
                  <button class="btn btn-success btn-sm">confirmed</button>
                @else
                  <button class="btn btn-warning btn-sm">pending</button>
                @endif  
                                            </td>
                                            <td>
                                             <a href="{{ route('details', ['id' => $o->id]) }}" class="btn btn-primary btn-sm">Show</a>   
                                            </td>
                                            <td>
                                                @if ($o->status)
                  <a href="{{ route('cancel', ['id' => $o->id]) }}" class="badge badge-success btn-sm">confirmed</a>
                @else
                  <a href="{{ route('confirm', ['id' => $o->id]) }}" class="badge badge-warning btn-sm">pending</a>
                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('remove', ['id' => $o->id]) }}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('dashboard') }}">back to home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
