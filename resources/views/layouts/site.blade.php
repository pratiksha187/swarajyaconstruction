<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#9c382e">
    <title>@yield('title', 'Swarajya Construction Pvt. Ltd. | Built with purpose')</title>
    <meta name="description" content="Swarajya Construction Pvt. Ltd. — residential construction, commercial projects, renovation and site supervision in Maharashtra. Based in Khopoli.">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/swarajya-full-logo.svg') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}?v=5">
    <script src="{{ asset('js/site.js') }}" defer></script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    @include('partials.header')
    <main id="main">@yield('content')</main>
    @include('partials.footer')
</body>
</html>
