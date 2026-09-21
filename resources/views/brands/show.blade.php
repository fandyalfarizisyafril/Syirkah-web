@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">Brand / Principal</span>
            <h1>{{ $brand['name'] }}</h1>
            <p>{{ $brand['description'] }}</p>
        </div>
    </section>

    <section class="section product-section">
        <div class="section-heading">
            <span class="eyebrow">{{ $brand['focus'] }}</span>
            <h2>Produk terkait brand ini.</h2>
        </div>

        <div class="product-grid">
            @forelse ($products as $product)
                <article class="product-card">
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['summary'] }}</p>
                    <strong>{{ $product['category'] }}</strong>
                    <a class="card-link" href="{{ route('products.show', $product['slug']) }}">Detail Produk</a>
                </article>
            @empty
                <article class="empty-state">
                    <h2>Belum ada produk terkait.</h2>
                    <p>Data produk dapat ditambahkan melalui `config/company.php`.</p>
                </article>
            @endforelse
        </div>
    </section>
@endsection
