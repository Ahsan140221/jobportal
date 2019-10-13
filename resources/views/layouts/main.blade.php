<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('../partials.head')
</head>

<body>
    @include('../partials.nav')

    @yield('content')

    @include('../partials.footer')

</body>

</html>
