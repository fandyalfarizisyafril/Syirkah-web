@extends('layouts.site')

@section('content')
    <section class="page-hero page-hero-product">
        <div>
            <span class="eyebrow">{{ $product['brand'] }} - {{ $product['category'] }}</span>
            <h1>{{ $product['name'] }}</h1>
            <p>{{ $product['description'] }}</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="{{ route('inquiry.create', ['product' => $product['name']]) }}">Request Inquiry</a>
                <a class="btn btn-secondary" href="{{ route('products.index') }}">Kembali ke Produk</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="detail-layout">
            <article class="detail-main">
                <span class="eyebrow">Product Introduction</span>
                <h2>{{ $product['name'] }}</h2>
                <p>{{ $product['description'] }}</p>

                <h3>Applications</h3>
                <ul class="pill-list">
                    @foreach ($product['applications'] as $application)
                        <li>{{ $application }}</li>
                    @endforeach
                </ul>

                <h3>Technical Specification</h3>
                <dl class="spec-list">
                    @foreach ($product['specifications'] as $label => $value)
                        <div>
                            <dt>{{ $label }}</dt>
                            <dd>{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
            </article>
            <aside class="detail-side">
                <h3>Brand / Principal</h3>
                <strong>{{ $product['brand'] }}</strong>
                <p>{{ $product['summary'] }}</p>
                <a class="btn btn-primary" href="{{ route('inquiry.create', ['product' => $product['name']]) }}">Request Inquiry</a>
                <a class="btn btn-ghost btn-full" href="{{ route('brands.show', strtolower(str_replace(' ', '-', $product['brand']))) }}">Lihat Brand</a>
                @if ($product['datasheet'])
                    <a class="btn btn-ghost btn-full" href="{{ $product['datasheet'] }}">Download Datasheet</a>
                @else
                    <p class="datasheet-note">Datasheet belum tersedia dan dapat ditambahkan melalui data produk.</p>
                @endif
            </aside>
        </div>
    </section>
@endsection
