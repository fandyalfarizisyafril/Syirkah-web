@extends('layouts.site')

@section('content')
    <section class="hero" id="home">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="eyebrow">{{ $company['positioning'] }}</span>
            <h1>Solusi teknis dan pengadaan industri presisi tinggi.</h1>
            <p>
                {{ $company['name'] }} menghubungkan kebutuhan industri di Indonesia dengan produk OEM,
                principal global, dan dukungan teknis yang sesuai spesifikasi.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Lihat Katalog</a>
                <a class="btn btn-secondary" href="{{ route('about') }}">Profil Perusahaan</a>
            </div>
            <dl class="hero-stats" aria-label="Ringkasan kapabilitas">
                <div>
                    <dt>{{ str_pad(count($company['focuses']), 2, '0', STR_PAD_LEFT) }}</dt>
                    <dd>Bidang utama</dd>
                </div>
                <div>
                    <dt>{{ count($company['brands']) }}</dt>
                    <dd>Principal produk</dd>
                </div>
                <div>
                    <dt>{{ count($company['products']) }}</dt>
                    <dd>Kategori produk</dd>
                </div>
                <div>
                    <dt>24/7</dt>
                    <dd>Respons kebutuhan</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="section section-light intro-section">
        <div class="section-heading">
            <span class="eyebrow">Tentang Perusahaan</span>
            <h2>Trusted partner untuk industrial equipment, spare parts, dan engineering solutions.</h2>
        </div>
        <div class="intro-grid">
            <p>{{ $company['description'] }}</p>
            <p>
                Fokusnya bukan hanya menjual barang, tetapi membantu pelanggan memilih produk,
                spesifikasi, dan solusi pengadaan yang tepat untuk menjaga reliability, efisiensi,
                safety, dan kontinuitas operasional.
            </p>
        </div>
    </section>

    <section class="section" id="layanan">
        <div class="section-heading">
            <span class="eyebrow">Bidang Utama</span>
            <h2>5 fokus keahlian untuk kebutuhan industri.</h2>
        </div>

        <div class="expertise-grid">
            @foreach ($company['focuses'] as $focus)
                <a class="expertise-card {{ $loop->last ? 'expertise-card-featured' : '' }}" href="{{ route('products.index') }}" style="--expertise-image: url('{{ $focus['image'] }}')">
                    <span class="expertise-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="expertise-arrow" aria-hidden="true">&rsaquo;</span>
                    <span class="expertise-content">
                        <h3>{{ $focus['title'] }}</h3>
                        <p>{{ $focus['description'] }}</p>
                    </span>
                </a>
            @endforeach
        </div>
    </section>

    <section class="section expertise-showcase">
        <div class="section-heading">
            <span class="eyebrow">Area Keahlian</span>
            <h2>Kapabilitas teknis yang dekat dengan kebutuhan lapangan.</h2>
        </div>
        <div class="expertise-image-grid">
            @foreach ($company['focuses'] as $focus)
                <a class="expertise-image-card" href="{{ route('products.index') }}">
                    <img src="{{ $focus['image'] }}" alt="{{ $focus['title'] }}">
                    <strong>{{ $focus['title'] }}</strong>
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            @endforeach
        </div>
    </section>

    <section class="section section-dark">
        <div class="value-layout">
            <div>
                <span class="eyebrow">Nilai Utama</span>
                <h2>Pengadaan yang disertai pemahaman teknis.</h2>
                <p>
                    Setiap kebutuhan industri dipetakan dari fungsi, spesifikasi, kondisi operasi,
                    dan target performa agar produk yang dipasok relevan dengan penggunaan aktual.
                </p>
            </div>
            <div class="value-grid">
                @foreach (array_slice($company['values'], 0, 3) as $value)
                    <article>
                        <h3>{{ $value['title'] }}</h3>
                        <p>{{ $value['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section product-section" id="produk">
        <div class="section-heading">
            <span class="eyebrow">Katalog Produk</span>
            <h2>Peralatan dan solusi teknis untuk operasional industri.</h2>
        </div>

        <div class="product-grid">
            @foreach ($company['products'] as $product)
                <article class="product-card {{ $loop->last ? 'product-card-wide' : '' }}">
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['summary'] }}</p>
                    <strong>{{ $product['brand'] }}</strong>
                    <a class="card-link" href="{{ route('products.show', $product['slug']) }}">Detail Produk</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="brand-band" aria-label="Principal dan brand">
        <div class="brand-band-inner">
            @foreach ($company['brands'] as $brand)
                <a href="{{ route('brands.show', $brand['slug']) }}">{{ $brand['name'] }}</a>
            @endforeach
        </div>
    </section>

    <section class="section sector-section" id="sektor">
        <div class="section-heading">
            <span class="eyebrow">Sektor Industri</span>
            <h2>Menjangkau kebutuhan teknis lintas sektor.</h2>
        </div>

        <div class="sector-grid">
            @foreach ($company['industries'] as $industry)
                <article>
                    <span></span>
                    <h3>{{ $industry['name'] }}</h3>
                    <p>{{ $industry['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="process-strip">
        <div class="process-image" role="img" aria-label="Teknisi industri dan peralatan pabrik"></div>
        <div class="process-content">
            <span class="eyebrow">Alur Kerja</span>
            <h2>Dari spesifikasi hingga pemilihan produk.</h2>
            <ol>
                <li><strong>Analisis kebutuhan</strong><span>Memahami fungsi, kondisi operasi, dan target teknis.</span></li>
                <li><strong>Product matching</strong><span>Menyesuaikan principal, tipe produk, dan spesifikasi.</span></li>
                <li><strong>Supply & support</strong><span>Mendukung proses pengadaan sampai produk siap digunakan.</span></li>
            </ol>
        </div>
    </section>

    <section class="section contact-page">
        <div class="contact-panel">
            <span class="eyebrow">Contact Information</span>
            <h2>Siap mendukung kebutuhan pengadaan industri.</h2>
            <p>{{ implode(', ', $company['contact']['address_lines']) }}</p>
            <p>{{ $company['contact']['phone'] }} - {{ implode(' / ', $company['contact']['emails']) }}</p>
        </div>
        <div class="contact-panel">
            <span class="eyebrow">Request / Inquiry</span>
            <h2>Kirim kebutuhan produk dan spesifikasi.</h2>
            <p>Gunakan form inquiry untuk menjelaskan produk, aplikasi, quantity, dan kebutuhan teknis.</p>
            <a class="btn btn-primary" href="{{ route('inquiry.create') }}">Request Inquiry</a>
        </div>
    </section>
@endsection
