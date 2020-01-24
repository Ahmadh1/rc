<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>@yield('title')</title>

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('theme/img/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('theme/img/favicon_60x60.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('theme/img/favicon_76x76.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('theme/img/favicon_120x120.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('theme/img/favicon_152x152.png') }}">

<!-- CSS Plugins -->
<link rel="stylesheet" href="{{ asset('theme/plugins/bootstrap/dist/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/plugins/slick-carousel/slick/slick.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/plugins/animate.css/animate.min.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/plugins/animsition/dist/css/animsition.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/snackbar.min.css') }}">
<!-- CSS Icons -->
<link rel="stylesheet" href="{{ asset('theme/css/themify-icons.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/plugins/font-awesome/css/font-awesome.min.css') }}" />

<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="{{ asset('theme/css/themes/theme-beige.min.css') }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">
    {{-- notify --}}
    @include('layouts.notify')
    <!-- Header -->
    @include('user.includes.nav')
    <!-- Header / End -->

    <!-- Content -->
    <div id="content">
		@yield('theme')		
    </div>
    <!-- Content / End -->

    <!-- Panel Cart -->
    @include('user.includes.panel-cart')

    <!-- Panel Mobile -->
    @include('user.includes.panel-mobile')

    <!-- Body Overlay -->
    <div id="body-overlay"></div>
</div>

<!-- Modal / Product -->


<!-- Video Modal / Demo -->
<div class="modal modal-video fade" id="modalVideo" role="dialog">
    <button class="close" data-dismiss="modal"><i class="ti-close"></i></button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <iframe height="500"></iframe>
        </div>
    </div>
</div>
 <!-- Footer -->
@include('user.includes.footer')
<!-- JS Plugins -->
<script src="{{ asset('theme/plugins/jquery/dist/jquery.min.js') }}"></script>     
<script src="{{ asset('theme/plugins/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('theme/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
@yield('axios')
<script src="{{ asset('theme/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery.appear/jquery.appear.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery.scrollto/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery.localscroll/jquery.localScroll.min.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('theme/plugins/twitter-fetcher/js/twitterFetcher_min.js') }}"></script>
<script src="{{ asset('theme/plugins/skrollr/dist/skrollr.min.js') }}"></script>
<script src="{{ asset('theme/plugins/animsition/dist/js/animsition.min.js') }}"></script>

<!-- JS Core -->
<script src="{{ asset('theme/js/core.js') }}"></script>

<!-- JS Stylewsitcher -->
{{-- <script src="{{ asset('styleswitcher/styleswitcher.js') }}"></script> --}}
<script src="{{ asset('js/snackbar.min.js') }}"></script>
    <script>
        @yield('notification-js')
    </script>
    
</body>
</html>
