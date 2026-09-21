<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? $company['description'] }}">

    <title>{{ $title ?? 'Company Profile' }} | {{ $company['name'] }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}" aria-label="{{ $company['name'] }}">
            <img class="brand-logo" src="{{ $company['logo'] }}" alt="SMART">
            <span class="brand-name">{{ $company['name'] }}</span>
        </a>

        <nav class="main-nav" aria-label="Navigasi utama">
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('brands.index') }}">Brands</a>
            <a href="{{ route('industries') }}">Solutions</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <a class="header-cta" href="{{ route('inquiry.create') }}">Request Quote</a>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div>
            <div class="footer-brand">
                <img class="footer-logo" src="{{ $company['logo'] }}" alt="SMART">
                <strong>{{ $company['name'] }}</strong>
            </div>
            <p>{{ $company['description'] }}</p>
        </div>
        <nav aria-label="Navigasi footer">
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('brands.index') }}">Brands</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </footer>
</body>
</html>
