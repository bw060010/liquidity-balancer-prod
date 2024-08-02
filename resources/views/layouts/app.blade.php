@php
    use Illuminate\Support\Facades\Request;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    @if (App::environment('production'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-WJX8ZVDJZY"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-WJX8ZVDJZY');
        </script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7011030500396488"
            crossorigin="anonymous"></script>
    @endif

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('description', 'Default Description')">
    <meta name="keywords" content="@yield('keywords', 'Default Keywords')">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}">
    @stack('head')
</head>

<body>
    <div class="grid-container">
        @if (Request::is('/'))
            @include('layouts.header-home')
        @else
            @include('layouts.header')
        @endif


        @yield('content')


        @if (Request::is('/'))
            @include('layouts.footer-home')
        @else
            @include('layouts.footer')
        @endif
        @stack('scripts')
    </div>
</body>

</html>
