<div id="panel-cart">
        <div class="panel-cart-container">
            <div class="panel-cart-title">
                <h5 class="title">Your Cart</h5>
                <button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
            </div>
            <div class="panel-cart-content">
                <table class="table-cart">
                    @if (Cart::instance('default')->count() > 0)
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
                        
                        @else
                            <tr>
                                <td class="text-danger h4 text-center">
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
        </div>
        <a href="{{ route('cart.page') }}" class="{{ Cart::instance('default')->count() == 0 ? 'disabled' : 'panel-cart-action btn btn-secondary btn-block btn-lg'}}"><span>Checkout</span></a>
    </div>