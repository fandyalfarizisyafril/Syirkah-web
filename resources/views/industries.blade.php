@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">Industrial Solutions</span>
            <h1>Reliability, efficiency, safety, dan environmental protection.</h1>
            <p>Solusi perusahaan diarahkan untuk menjaga operational continuity lintas sektor industri.</p>
        </div>
    </section>

    <section class="section section-light">
        <div class="benefit-grid">
            @foreach ($company['benefits'] as $benefit)
                <article>{{ $benefit }}</article>
            @endforeach
        </div>
    </section>

    <section class="section">
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
@endsection
