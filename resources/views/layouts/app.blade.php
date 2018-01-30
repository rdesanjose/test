<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog | @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<section id="main-container">
    <header class="clearfix">
        <div class="auto mobile-width">
            <div class="logo text-center">
                <h1><a href="{{ URL::to('/') }}">My Blog</a></h1>
            </div>
        </div>
        <div class="main-nav">
            <a class="burger-menu clearfix">
                <div class="line"><div></div><div></div><div></div></div>
                <label>Menu</label>
            </a>
            <ul class="clearfix">
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{ URL::to('/posts') }}">Posts</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </header>
    <section id="main-wrapper">
        @yield('content')
    </section>
</section>
<footer>
    <p class="text-center">Copyright &copy; 2018. All rights reserved.</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel2.thumbs.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/common.js') }}"></script>
@yield('homejs')
@yield('postjs')
</body>
</html>