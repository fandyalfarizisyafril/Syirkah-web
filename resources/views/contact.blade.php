@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">Contact</span>
            <h1>Hubungi PT. Syirkah Mandiri Artomoro.</h1>
            <p>Kirim kebutuhan produk, spesifikasi, aplikasi, atau permintaan konsultasi teknis.</p>
        </div>
    </section>

    <section class="section contact-page">
        <div class="contact-info">
            <article>
                <h2>Address</h2>
                @foreach ($company['contact']['address_lines'] as $line)
                    <p>{{ $line }}</p>
                @endforeach
            </article>
            <article>
                <h2>Phone</h2>
                <p><a href="tel:{{ preg_replace('/[^0-9+]/', '', $company['contact']['phone']) }}">{{ $company['contact']['phone'] }}</a></p>
            </article>
            <article>
                <h2>Email</h2>
                @foreach ($company['contact']['emails'] as $email)
                    <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
                @endforeach
            </article>
        </div>
        <div class="contact-panel">
            <span class="eyebrow">Inquiry</span>
            <h2>Butuh produk atau solusi teknis?</h2>
            <p>Gunakan form inquiry agar kebutuhan dapat dikirim dengan data yang lebih lengkap.</p>
            <a class="btn btn-primary" href="{{ route('inquiry.create') }}">Request Inquiry</a>
        </div>
    </section>
@endsection
