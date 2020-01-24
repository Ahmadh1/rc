@extends('layouts.master')
	@section('title', 'Menu')
		@section('theme')
		<!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Menu</h1>
                        <h4 class="text-muted mb-0">Select some Delicious Food</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-10 push-md-1" role="tablist">
                        <!-- Menu Category / Burgers -->
                        <div id="Burgers" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuBurgersContent" data-toggle="collapse" aria-expanded="true">
                                <div class="bg-image"><img src="{{ asset('theme/img/photos/menu-title-burgers.jpg') }}" alt=""></div>
                                <h2 class="title">Burgers</h2>
                            </div>
                            <div id="menuBurgersContent" class="menu-category-content padded collapse show">
                                <div class="row gutters-sm">
                                    @foreach ($burgers->dishes()->latest()->get() as $b)
                                        <div class="col-lg-4 col-6">
                                        <!-- Menu Item -->
                                        <div class="menu-item menu-grid-item">
                                            <img class="mb-4" src="{{ asset('uploads' .'/'. $b->image) }}" alt="{{ $b->title }}">
                                            <h6 class="mb-0">{{ $b->title }}</h6>
                                            <span class="text-muted text-sm">{{ $b->details }}</span>
                                            <div class="row align-items-center mt-4">
                                                <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> ${{ $b->price }}</span></div>
                                                <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                    <form id="addToCart" action="{{ route('cart') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $b->id }}">
                                                        <input type="hidden" name="title" value="{{ $b->title }}">
                                                        <input type="hidden" name="price" value="{{ $b->price }}">
                                                        <button type="submit" class="btn btn-outline-secondary btn-sm"><span>Add to cart</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
<!-- Menu Category / Pasta -->
<div id="Pasta" class="menu-category">
<div class="menu-category-title collapse-toggle" role="tab" data-target="#menuPastaContent" data-toggle="collapse" aria-expanded="false">
    <div class="bg-image"><img src="{{ asset('theme/img/photos/menu-title-pasta.jpg') }}" alt=""></div>
    <h2 class="title">Pasta</h2>
</div>
<div id="menuPastaContent" class="menu-category-content padded collapse">
<div class="row gutters-sm">
{{-- @foreach ($pastas->dishes()->inRandomOrder()->take(6)->get() as $p)
<div class="col-lg-4 col-6">
<!-- Menu Item -->
<div class="menu-item menu-grid-item">
<img class="mb-4" src="{{ asset('uploads' .'/'. $p->image) }}" alt="{{ $p->title }}">
<h6 class="mb-0">{{ $p->title }}</h6>
<span class="text-muted text-sm">{{ $p->details }}</span>
<div class="row align-items-center mt-4">
<div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> ${{ $p->price }}</span></div>
<div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
<form id="addToCart" action="{{ route('cart') }}" method="POST">
@csrf
<input type="hidden" name="id" value="{{ $p->id }}">
<input type="hidden" name="title" value="{{ $p->title }}">
<input type="hidden" name="price" value="{{ $p->price }}">
<button type="submit" class="btn btn-outline-secondary btn-sm"><span>Add to cart</span></button>
</form>
</div>
</div>
</div>
</div>
@endforeach --}}
</div>
</div>
</div>
                        <!-- Menu Category / Pizza -->
                        <div id="Pizza" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuPizzaContent" data-toggle="collapse" aria-expanded="false">
                                <div class="bg-image"><img src="{{ asset('theme/img/photos/menu-title-pizza.jpg') }}" alt=""></div>
                                <h2 class="title">Pizza</h2>
                            </div>
                            <div id="menuPizzaContent" class="menu-category-content padded collapse">
    <div class="row gutters-sm">
            <!-- Menu Item -->
            @foreach ($pizzas->dishes()->inRandomOrder()->take(6)->get() as $piz)
    		<div class="col-lg-4 col-6">
            <!-- Menu Item -->
            <div class="menu-item menu-grid-item">
                <img class="mb-4" src="{{ asset('uploads' .'/'. $piz->image) }}" alt="{{ $piz->title }}">
                <h6 class="mb-0">{{ $piz->title }}</h6>
                <span class="text-muted text-sm">{{ $piz->details }}</span>
                <div class="row align-items-center mt-4">
                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> ${{ $piz->price }}</span></div>
                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                    	<form id="addToCart" action="{{ route('cart') }}" method="POST">
                            @csrf
                    		<input type="hidden" name="id" value="{{ $piz->id }}">
                    		<input type="hidden" name="title" value="{{ $piz->title }}">
                    		<input type="hidden" name="price" value="{{ $piz->price }}">
                    		<button type="submit" class="btn btn-outline-secondary btn-sm"><span>Add to cart</span></button>
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    	@endforeach
    </div>
                            </div>
                        </div>
                        <!-- Menu Category / Sushi -->
                        <div id="Sushi" class="menu-category">
                            <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuSushiContent" data-toggle="collapse" aria-expanded="false">
                                <div class="bg-image"><img src="{{ asset('theme/img/photos/menu-title-sushi.jpg') }}" alt=""></div>
                                <h2 class="title">Sushi</h2>
                            </div>
                            <div id="menuSushiContent" class="menu-category-content padded collapse">
    <div class="row gutters-sm">
        @foreach ($sushi->dishes()->inRandomOrder()->take(6)->get() as $sus)
    		<div class="col-lg-4 col-6">
            <!-- Menu Item -->
            <div class="menu-item menu-grid-item">
                <img class="mb-4" src="{{ asset('uploads' .'/'. $sus->image) }}" alt="{{ $sus->title }}">
                <h6 class="mb-0">{{ $sus->title }}</h6>
                <span class="text-muted text-sm">{{ $sus->details }}</span>
                <div class="row align-items-center mt-4">
                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> ${{ $sus->price }}</span></div>
                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                    	<form id="addToCart" action="{{ route('cart') }}" method="POST">
                            @csrf
                    		<input type="hidden" name="id" value="{{ $sus->id }}" id="id">
                    		<input type="hidden" name="title" value="{{ $sus->title }}" id="title">
                    		<input type="hidden" name="price" value="{{ $sus->price }}" id="price">
                    		<button id="send_form" class="btn btn-outline-secondary btn-sm"><span>Add to cart</span></button>
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    	@endforeach
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
