<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@include('partials.header')
<div class="container">
</div>
@include('partials.footer')

@stack('script_link')

@stack('scripts')
</body>
</html>
