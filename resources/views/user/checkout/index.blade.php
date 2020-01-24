@extends('layouts.master')
@section('title', 'Checkout')
@section('theme')
	<!-- Page Title -->
        <div class="page-title bg-dark dark">
            <!-- BG Image -->
            <div class="bg-image bg-parallax"><img src="{{ asset('theme/img/photos/bg-croissant.jpg') }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Checkout</h1>
                        <h4 class="text-muted mb-0">See you soon...</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                	@if (Cart::instance('default')->count() > 0)
                		
                    <div class="col-xl-4 push-xl-8 col-lg-5 push-lg-7">
                        <div class="shadow bg-white stick-to-content mb-4">
                            <div class="bg-dark dark p-4"><h5 class="mb-0">You order</h5></div>
						<div class="panel-cart-content">
                <table class="table-cart">
                    
                    @foreach (Cart::instance('default')->content() as $item)
                        <tr>
                        <td class="title">
                            <span class="name"><a href="#">{{ $item->model->title }}</a></span>
                            <span class="caption text-muted">{{ $item->model->qty }}</span>
                        </td>
                        <td class="price">Rs.{{ $item->total() }}</td>
                        <td>
                            <form action="{{ route('dish.remove', ['id' => $item->rowId] ) }}" method="POST">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-link">
                                <i class="ti ti-close"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                        
                </table>
                <div class="cart-summary">
                    <div class="row">
                        <div class="col-7 text-right text-muted">Order total:</div>
                        <div class="col-5"><strong>Rs.{{ Cart::subTotal() }}</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-7 text-right text-muted">Devliery:</div>
                        <div class="col-5"><strong>Rs.{{ Cart::tax() }}</strong></div>
                    </div>
                    <hr class="hr-sm">
                    <div class="row text-lg">
                        <div class="col-7 text-right text-muted">Total:</div>
                        <div class="col-5"><strong>Rs.{{ Cart::total() }}</strong></div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 pull-xl-4 col-lg-7 pull-lg-5">
                        <div class="bg-white p-4 p-md-5 mb-4">
                            <h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Basic informations</h4>
                            <form action="{{ url('/checkout') }}" method="POST">
                            	@csrf
                            <div class="row mb-5">
                                <div class="form-group col-sm-6">
                                     <label>Phone number:</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                 <div class="form-group col-sm-6">
                                     <label>Email:</label>
                                    <input type="text" class="form-control"
                                    name="email">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>City:</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                                <div class="form-group col-sm-6">
                                   <label>Address:</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                 <div class="form-group col-sm-12">
                                     <label>Details:</label>
                                   <textarea name="details" class="form-control" placeholder="Pizza Size SM, XL, MD" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <h4 class="border-bottom pb-4"><i class="ti ti-wallet mr-3 text-primary"></i>Payment</h4>
                            <div class="row text-lg">
                                <div class="col-md-4 col-sm-6 form-group">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cash</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-secondary btn-lg"><span>Order now!</span></button>
                        </div>
                        </form>
                    </div>
                    	@else
						<a href="{{ url('/menu') }}" class="btn btn-outline-secondary btn-lg"><span>No Item in Cart Go Shopping</span></a>
                	@endif
                </div>
            </div>

        </section>
@stop