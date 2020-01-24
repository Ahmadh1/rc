<header id="header" class="light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Logo -->
                <div class="module module-logo dark">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('theme/img/logo-light.svg') }}" alt="" width="88">
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Navigation -->
                <nav class="module module-navigation left mr-4">
                    <ul id="nav-main" class="nav nav-main">
                        <li class="{{ setActive(['/']) }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">About</a>
                            <div class="dropdown-container">
                                <ul class="dropdown-mega">
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li>
                                        <a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li>
                                        <a href="{{ route('reviews') }}">Reviews</a></li>
                                    <li>
                                        <a href="{{ route('faq') }}">FAQ</a></li>
                                </ul>
                                <div class="dropdown-image">
                                    <img src="{{ asset('theme/img/photos/dropdown-about.jpg') }}" alt="">
                                </div>
                            </div>
                        </li>
                        <li class="{{ setActive(['menu']) }}">
                            <a href="{{ url('/menu') }}">Menu</a>
                        </li>
                        <li class="{{ setActive(['offers']) }}"">
                        <a href="{{ route('offers') }}">Offers</a>
                    </li>
                        <li class="{{ setActive(['contact']) }}">
                            <a href="{{ route('contact') }}">Contact</a></li>
            @guest
               <li class="{{ setActive(['login']) }}">
                    <a href="{{ route('login') }}">{{ __('login') }}</a>
                </li> 
                @if (Route::has('register'))
                    <li class="{{ setActive(['register']) }}">
                        <a href="{{ route('register') }}">
                            {{ __('register') }}
                        </a>
                    </li>     
                @endif
            @else
                <li class="has-dropdown">
                <a href="#" class="text-primary">{{ Auth::user()->name }}</a>
                <div class="dropdown-container">
                    <ul class="">
                        <li>
                            <a href="{{ route('track') }}">Track Order</a>
                        </li>
                        <li>
                            <a class="text-danger" href="{{ route('logout') }}"onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>     
                        </li>
                    </ul>
                </div>
            </li>
            @endguest
                    </ul>
                </nav>
{{--                 <div class="module left">
                    <a href="menu-list-navigation.html" class="btn btn-outline-secondary"><span>Order</span></a>
                </div> --}}
            </div>
            <div class="col-md-2">
                <a href="#" class="module module-cart right" data-toggle="panel-cart">
                    <span class="cart-icon">
                        <i class="ti ti-shopping-cart"></i>
                        <span class="notification">
                        @if (Cart::instance('default')->count() > 0)
                            {{ Cart::instance('default')->count() }}
                            @else
                                0
                        @endif
                        </span>
                    </span>
                    <span class="cart-value">Rs.{{ Cart::subTotal() }}</span>
                </a>
            </div>
        </div>
    </div>

    </header>
    <!-- Header / End -->

    <!-- Header -->
    <header id="header-mobile" class="light">

        <div class="module module-nav-toggle">
            <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
        </div>

        <div class="module module-logo">
            <a href="index.html">
                <img src="{{ asset('theme/img/logo-horizontal-dark.svg') }}" alt="">
            </a>
        </div>

        <a href="#" class="module module-cart" data-toggle="panel-cart">
            <i class="ti ti-shopping-cart"></i>
            <span class="notification">2</span>
        </a>

    </header>