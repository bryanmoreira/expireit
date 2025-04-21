<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title', 'Blank page')</title>
    @include('partials.head')
</head>
<body>
    <div>
        {{ $slot }}
    </div>
</body>
</html>
