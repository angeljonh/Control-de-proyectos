<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SoftGym</title>
        <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

    </head>
    <body>
        
        @yield('content')

    </body>
</html>
