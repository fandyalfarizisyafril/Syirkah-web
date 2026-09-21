@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">Products & Solutions</span>
            <h1>Katalog produk industri dan solusi teknis.</h1>
            <p>Temukan kategori produk, brand/principal, aplikasi, dan detail teknis untuk kebutuhan pengadaan.</p>
        </div>
    </section>

    <section class="section product-section">
        <form class="filter-bar" action="{{ route('products.index') }}" method="get">
            <label>
                Search Product
                <input type="search" name="search" value="{{ $activeSearch }}" placeholder="Cari produk, brand, atau fungsi">
            </label>
            <label>
                Category
                <select name="category">
                    <option value="">Semua kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" @selected($activeCategory === $category)>{{ $category }}</option>
                    @endforeach
                </select>
            </label>
            <button class="btn btn-primary" type="submit">Filter</button>
            <a class="btn btn-ghost" href="{{ route('products.index') }}">Reset</a>
        </form>

        <div class="product-grid">
            @forelse ($products as $product)
                <article class="product-card">
                    <small>{{ $product['category'] }}</small>
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['summary'] }}</p>
                    <strong>{{ $product['brand'] }}</strong>
                    <a class="card-link" href="{{ route('products.show', $product['slug']) }}">Detail Produk</a>
                </article>
            @empty
                <article class="empty-state">
                    <h2>Produk tidak ditemukan.</h2>
                    <p>Coba gunakan kata kunci atau kategori lain.</p>
                </article>
            @endforelse
        </div>
    </section>
@endsection
