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
            <a @class(['is-active' => request()->routeIs('home')]) href="{{ route('home') }}" @if (request()->routeIs('home')) aria-current="page" @endif>Beranda</a>
            <a @class(['is-active' => request()->routeIs('about')]) href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>Tentang Kami</a>
            <a @class(['is-active' => request()->routeIs('products.*')]) href="{{ route('products.index') }}" @if (request()->routeIs('products.*')) aria-current="page" @endif>Produk</a>
            <a @class(['is-active' => request()->routeIs('brands.*')]) href="{{ route('brands.index') }}" @if (request()->routeIs('brands.*')) aria-current="page" @endif>Principal</a>
            <a @class(['is-active' => request()->routeIs('industries')]) href="{{ route('industries') }}" @if (request()->routeIs('industries')) aria-current="page" @endif>Solusi</a>
            <a @class(['is-active' => request()->routeIs('contact')]) href="{{ route('contact') }}" @if (request()->routeIs('contact')) aria-current="page" @endif>Kontak</a>
        </nav>

        <a class="header-cta" href="{{ route('inquiry.create') }}">Minta Penawaran</a>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <img class="footer-tagline-logo" src="/images/smart-tagline.jpg" alt="SMART Equipment & Parts Solutions">

            <div class="footer-message">
                <h2>Let us be strategic partner</h2>
                <p>
                    We are fully prepared to meet and support all your Engineering, Mechanical,
                    Electrical, and Instrumentation requirements - delivering top-quality products
                    and procurement that is accurate, timely, and reliable.
                </p>
            </div>

            <div class="footer-contact-grid">
                <div class="footer-contact-item footer-address">
                    <span>Address</span>
                    @foreach ($company['contact']['address_lines'] as $line)
                        <p>{{ $line }}</p>
                    @endforeach
                </div>
                <div class="footer-contact-stack">
                    <div class="footer-contact-item">
                        <span>Phone</span>
                        <p>{{ $company['contact']['phone'] }}</p>
                    </div>
                    <div class="footer-contact-item">
                        <span>Email</span>
                        @foreach ($company['contact']['emails'] as $email)
                            <p>{{ $email }}</p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-mini-brand">
                    <img src="{{ $company['logo'] }}" alt="SMART">
                    <strong>{{ $company['name'] }}</strong>
                </div>
                <strong class="footer-thanks">Thank you</strong>
            </div>
        </div>
    </footer>
</body>
</html>
