@extends('layouts.master')
@section('title', 'Cart')
@section('theme')
		<!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Cart</h1>
                        <h4 class="text-muted mb-0">Manage you cart from here</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
				<div class="panel-cart-content">
                <table class="table-cart">
                	<thead>
					<tr>
						<th>Name</th>
						<th>Image</th>
						<th>Qty.</th>
						<th>Price</th>
						<th>Remove</th>
					</tr>
					</thead>
                    @if (Cart::instance('default')->count() > 0)
                    @foreach (Cart::instance('default')->content() as $item)
                        <tr>
                        <td class="title">
                            <p class="text-secondary">{{ $item->model->title }}</p>
                        </td>
                        <td>
                        	<img src="{{ asset('uploads' . '/' . $item->model->image) }}" alt="" style="width: 150px;" class="rounded img-responsive">
                        </td>
                        <td>
                        	<select class="form-control quantity"  data-id="{{ $item->rowId }}">
                                       @for ($i = 1; $i < 5 + 1; $i++)
                                        <option {{ $item->qty == $i ? 'selected' : '' }}>{{$i}}</option>
                                      @endfor

                                    </select>
                        </td>
                        <td class="price">Rs.{{ $item->model->price }}</td>
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
                        @else
                            <tr>
                                <td class="text-danger h4 text-center" colspan="5">
                                    Cart is empty
                                </td>
                            </tr>
                    @endif
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
            <div class="float-right" style="margin-bottom: 40px;">
            <a href="{{ url('/menu') }}" class="btn btn-outline-secondary btn-lg"><span>Continue Shop</span></a>
            <a href="{{ route('checkout') }}" class="btn btn-outline-secondary btn-lg"><span>Checkout</span></a>
            </div>
            </div>
        </div>
@endsection

@section('axios')
<script src="{{ asset('js/app.js') }}"></script>
	<script>
		 const className = document.querySelectorAll('.quantity');

        Array.from(className).forEach(function (el) {
            el.addEventListener('change', function () {
                const id = el.getAttribute('data-id');
                axios.patch(`/cart/update/${id}`, {
                    quantity: this.value
                })
                    .then(function (response) {
                          location.reload();
                    })

                    .catch(function (error) {
                        console.log(error);
                        location.reload();
                    });
            });
        });

	  </script>
@stop