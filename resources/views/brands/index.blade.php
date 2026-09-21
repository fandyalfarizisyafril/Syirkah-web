@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">Brands / Principals</span>
            <h1>Principal produk untuk kebutuhan teknis industri.</h1>
            <p>Brand yang ditampilkan mendukung kategori produk utama PT. Syirkah Mandiri Artomoro.</p>
        </div>
    </section>

    <section class="section">
        <div class="brand-card-grid">
            @foreach ($brands as $brand)
                <article class="brand-card">
                    <strong>{{ $brand['name'] }}</strong>
                    <h2>{{ $brand['focus'] }}</h2>
                    <p>{{ $brand['description'] }}</p>
                    <a class="card-link" href="{{ route('brands.show', $brand['slug']) }}">Detail Brand</a>
                </article>
            @endforeach
        </div>
    </section>
@endsection
