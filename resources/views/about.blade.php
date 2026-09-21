@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">About Company</span>
            <h1>Partner pengadaan dan solusi teknis industri.</h1>
            <p>{{ $company['description'] }}</p>
        </div>
    </section>

    <section class="section section-light">
        <div class="content-grid">
            <article>
                <span class="eyebrow">Company Profile</span>
                <h2>Penghubung principal global dengan kebutuhan industri Indonesia.</h2>
            </article>
            <article class="prose-panel">
                <p>
                    {{ $company['name'] }} membantu pelanggan menentukan produk, spesifikasi,
                    dan solusi pengadaan yang sesuai dengan kebutuhan operasional. Pendekatan ini
                    menempatkan perusahaan bukan hanya sebagai supplier, tetapi juga technical partner.
                </p>
                <p>
                    Fokus perusahaan mencakup engineering, mechanical, electrical, instrumentation,
                    serta oil spill response & prevention.
                </p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-heading">
            <span class="eyebrow">Our Focus</span>
            <h2>Bidang utama perusahaan.</h2>
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

    <section class="section section-dark">
        <div class="section-heading">
            <span class="eyebrow">Our Value</span>
            <h2>Nilai yang ditawarkan dalam setiap kebutuhan teknis.</h2>
        </div>
        <div class="value-grid value-grid-wide">
            @foreach ($company['values'] as $value)
                <article>
                    <h3>{{ $value['title'] }}</h3>
                    <p>{{ $value['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section" id="legal">
        <div class="section-heading">
            <span class="eyebrow">Legal Information</span>
            <h2>Informasi legal perusahaan.</h2>
        </div>
        <div class="legal-grid">
            @foreach ($company['legal'] as $legal)
                <article>
                    <h3>{{ $legal['label'] }}</h3>
                    <strong>{{ $legal['value'] }}</strong>
                    <p>{{ $legal['note'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
