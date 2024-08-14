<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front.layouts.includes.head')
    <title>
        @yield('title', 'Home')
    </title>
</head>

<body>
    <x-front-header-component/>
    @yield('content')
    <x-front-footer-component/>
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
