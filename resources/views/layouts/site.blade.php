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
            <a href="{{ route('about') }}">Tentang Kami</a>
            <a href="{{ route('products.index') }}">Produk</a>
            <a href="{{ route('brands.index') }}">Principal</a>
            <a href="{{ route('industries') }}">Solusi</a>
            <a href="{{ route('contact') }}">Kontak</a>
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
