<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front.layouts.includes.head')
    <title>
        @yield('title', 'Home')
    </title>
</head>

<body>
    @unless (Route::is('login') || Route::is('register'))
        <x-front-header-component />
    @endunless
    @yield('content')
    @unless (Route::is('login') || Route::is('register'))
    <x-front-footer-component />
    @endunless
    @include('front.layouts.includes.foot')
    @push('js')
        <script async="" src="../../gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    @endpush
</body>

</html>
