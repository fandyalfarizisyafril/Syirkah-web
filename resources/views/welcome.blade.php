@extends('layouts.site')

@php
    $focuses = $company['focuses'];
    $oilFocus = $focuses[4];
    $catalogProducts = array_slice($company['products'], 0, 6);
@endphp

@section('content')
    <section class="home-hero" id="home">
        <div class="home-hero-inner">
            <span class="home-kicker">Official OEM Distributor & Heavy Industrial Contractor</span>
            <h1>
                Solusi Teknis &
                <span>Pengadaan Industri</span>
                Presisi Tinggi.
            </h1>
            <p>
                {{ $company['name'] }} adalah mitra strategis pengadaan peralatan vital dan rekayasa teknis industri.
                Kami menjembatani kebutuhan operasional sektor pertambangan, minyak & gas, petrokimia, maritim,
                dan manufaktur skala berat.
            </p>

            <div class="home-hero-actions">
                <a class="btn btn-primary" href="{{ route('inquiry.create') }}">Konsultasi Teknis / RFQ</a>
                <a class="btn btn-secondary" href="#bidang-utama">Jelajahi 5 Bidang Utama</a>
            </div>

            <dl class="home-hero-stats" aria-label="Ringkasan kapabilitas">
                <div>
                    <dt>05</dt>
                    <dd>Bidang fokus utama</dd>
                </div>
                <div>
                    <dt>7+</dt>
                    <dd>Principal OEM global</dd>
                </div>
                <div>
                    <dt>100%</dt>
                    <dd>Produk resmi & terkurasi</dd>
                </div>
                <div>
                    <dt>24/7</dt>
                    <dd>Dukungan kebutuhan</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="home-section home-expertise" id="bidang-utama">
        <div class="home-section-head home-section-head-split">
            <div>
                <span class="home-eyebrow">Core Business Services</span>
                <h2>5 Bidang Utama Keahlian</h2>
            </div>
            <p>
                Penyediaan solusi terintegrasi mulai dari studi kebutuhan, pemilihan equipment,
                pengadaan, hingga dukungan teknis lapangan.
            </p>
        </div>

        <div class="home-expertise-grid">
            @foreach (array_slice($focuses, 0, 3) as $focus)
                <article class="home-service-card">
                    <img src="{{ $focus['image'] }}" alt="{{ $focus['title'] }}">
                    <div>
                        <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $focus['title'] }}</h3>
                        <p>{{ $focus['description'] }}</p>
                        <ul>
                            <li>Analisis kebutuhan & spesifikasi</li>
                            <li>Seleksi produk sesuai aplikasi</li>
                        </ul>
                        <a href="{{ route('products.index') }}">Lihat Kebutuhan</a>
                    </div>
                </article>
            @endforeach

            <article class="home-service-card">
                <img src="{{ $focuses[3]['image'] }}" alt="{{ $focuses[3]['title'] }}">
                <div>
                    <span>04</span>
                    <h3>{{ $focuses[3]['title'] }}</h3>
                    <p>{{ $focuses[3]['description'] }}</p>
                    <ul>
                        <li>Monitoring, metering, kontrol proses</li>
                        <li>Instrumentasi untuk akurasi operasi</li>
                    </ul>
                    <a href="{{ route('products.index', ['category' => 'Instrumentation']) }}">Lihat Kebutuhan</a>
                </div>
            </article>

            <article class="home-service-card">
                <img src="{{ $oilFocus['image'] }}" alt="{{ $oilFocus['title'] }}">
                <div>
                    <span>05</span>
                    <h3>{{ $oilFocus['title'] }}</h3>
                    <p>{{ $oilFocus['description'] }}</p>
                    <ul>
                        <li>Oil boom, absorbent, skimmer</li>
                        <li>Dispersant, spray system, spill kit</li>
                    </ul>
                    <a href="{{ route('products.show', 'oil-spill-response-prevention') }}">Lihat Solusi</a>
                </div>
            </article>
        </div>
    </section>

    <section class="home-section home-trust" id="kepercayaan-industri">
        <div class="home-section-head home-section-head-center">
            <span class="home-eyebrow">Jaminan Tanpa Kompromi</span>
            <h2>Kepercayaan & Keandalan di Setiap Tahap Operasional</h2>
            <p>
                Kami mengerti bahwa kegagalan satu komponen dapat menghentikan seluruh lini produksi bernilai tinggi.
                Pendekatan kami bertumpu pada 3 fondasi industri.
            </p>
        </div>

        <div class="home-trust-grid">
            <article>
                <div class="home-trust-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" focusable="false">
                        <path d="M6 6h12v14H6z"></path>
                        <path d="M8 4h8"></path>
                        <path d="M9 10h6"></path>
                    </svg>
                </div>
                <h3>Supply & Procurement Resmi</h3>
                <p>
                    Jaminan keaslian 100% komponen dengan sertifikasi langsung dari pabrikan.
                    Bebas dari risiko suku cadang tiruan yang membahayakan keselamatan kerja.
                </p>
                <strong class="home-trust-tag">OEM Warranty & Traceability</strong>
            </article>
            <article class="is-highlight">
                <div class="home-trust-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" focusable="false">
                        <path d="M8 12a4 4 0 1 1 8 0"></path>
                        <path d="M12 8v8"></path>
                        <path d="M7 16h10"></path>
                        <path d="M5 19h14"></path>
                    </svg>
                </div>
                <h3>Engineering & Rekayasa Kustom</h3>
                <p>
                    Tim insinyur membantu menghitung viskositas, head pump, torsi motor listrik,
                    dan kebutuhan spesifikasi agar produk siap bekerja di kondisi lapangan.
                </p>
                <strong class="home-trust-tag">Tailored Sizing & Integration</strong>
            </article>
            <article>
                <div class="home-trust-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" focusable="false">
                        <path d="M12 3l7 3v5c0 5-3.2 8.4-7 10-3.8-1.6-7-5-7-10V6z"></path>
                        <path d="M12 8v5"></path>
                        <path d="M12 16h.01"></path>
                    </svg>
                </div>
                <h3>Safety, K3 & Zero Downtime</h3>
                <p>
                    Selaras dengan regulasi keselamatan kerja dan standar industrial.
                    Kami memprioritaskan umur pakai komponen, efisiensi konsumsi listrik, dan kepatuhan ramah lingkungan.
                </p>
                <strong class="home-trust-tag">Safety First & Green Efficiency</strong>
            </article>
        </div>
    </section>

    <section class="home-critical">
        <div class="home-critical-inner">
            <div class="home-critical-copy">
                <span class="home-eyebrow">Reliability Critical Facilities</span>
                <h2>Keandalan Fasilitas Kritikal</h2>
                <article>
                    <span>Industrial Supply & Technical Support</span>
                    <h3>Penguatan sistem pompa, motor, instrumentasi, dan oil spill protection.</h3>
                    <p>
                        Kami mendukung fasilitas operasional yang membutuhkan equipment tepat,
                        respon pengadaan cepat, dan pemilihan spesifikasi yang reliable.
                    </p>
                    <a class="home-square-link" href="{{ route('inquiry.create') }}" aria-label="Ajukan konsultasi">›</a>
                </article>
            </div>
            <img src="/images/industrial-hero.png" alt="Fasilitas industri kritikal">
        </div>
    </section>

    <section class="home-section home-brands">
        <div class="home-brand-head">
            <div>
                <span class="home-eyebrow">Global OEM Partners</span>
                <h2>7 Principal dan Brand Global Terpercaya</h2>
            </div>
            <p>Kami menyediakan dukungan pengadaan dari principal dan brand yang relevan untuk kebutuhan industrial equipment.</p>
        </div>
        <div class="home-brand-list">
            @foreach ($company['brands'] as $brand)
                <a href="{{ route('brands.show', $brand['slug']) }}">
                    <strong>{{ $brand['name'] }}</strong>
                    <span>{{ $brand['focus'] }}</span>
                </a>
            @endforeach
        </div>
    </section>

    <section class="home-section home-catalog" id="produk">
        <div class="home-section-head">
            <span class="home-eyebrow">Katalog & Spesifikasi Teknis</span>
            <h2>Katalog Peralatan & Spesifikasi Teknis</h2>
            <p>Pemetaan kategori produk utama untuk kebutuhan mechanical, electrical, instrumentation, dan environmental protection.</p>
        </div>

        <div class="home-catalog-grid">
            @foreach ($catalogProducts as $product)
                <article>
                    <span>{{ $product['category'] }}</span>
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['summary'] }}</p>
                    <dl>
                        <div>
                            <dt>Brand</dt>
                            <dd>{{ $product['brand'] }}</dd>
                        </div>
                        <div>
                            <dt>Aplikasi</dt>
                            <dd>{{ implode(', ', array_slice($product['applications'], 0, 2)) }}</dd>
                        </div>
                    </dl>
                    <a href="{{ route('products.show', $product['slug']) }}">Request Info</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="home-section home-industries" id="sektor">
        <div class="home-section-head">
            <span class="home-eyebrow">Target Industri</span>
            <h2>Sektor Industri dengan Keandalan Tinggi</h2>
            <p>Kami menangani kebutuhan teknis untuk spektrum industri strategis dengan standar operasional yang ketat.</p>
        </div>

        <div class="home-industry-grid">
            @foreach ($company['industries'] as $industry)
                <article>
                    <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3>{{ $industry['name'] }}</h3>
                    <p>{{ $industry['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="home-section home-team">
        <div class="home-section-head home-section-head-center">
            <span class="home-eyebrow">Tim & Dedikasi</span>
            <h2>Insinyur Kami, Dedikasi Kami</h2>
            <p>Tim siap membantu analisis kebutuhan, pemilihan produk, dan koordinasi pengadaan yang sesuai target operasional.</p>
        </div>

        <div class="home-team-grid">
            <article class="home-team-note">
                <h3>Budaya Kerja K3</h3>
                <p>Keselamatan kerja menjadi dasar dalam setiap dukungan teknis dan proses pengadaan.</p>
            </article>
            <img src="/images/expertise-engineering.png" alt="Tim engineering industri">
            <img src="/images/expertise-mechanical.png" alt="Teknisi mechanical industri">
            <article class="home-team-note is-light">
                <h3>Respon Cepat</h3>
                <p>Tim membantu menindaklanjuti kebutuhan teknis dan RFQ dengan informasi yang lengkap.</p>
            </article>
        </div>
    </section>

    <section class="home-rfq" id="kontak">
        <div class="home-rfq-copy">
            <span class="home-eyebrow">RFQ / Konsultasi Teknis</span>
            <h2>Ajukan Permintaan RFQ / Konsultasi Teknis</h2>
            <p>
                Kirim kebutuhan produk, spesifikasi, aplikasi, dan target penggunaan.
                Tim kami akan membantu mencocokkan kebutuhan Anda dengan solusi yang tepat.
            </p>
            <div>
                <strong>{{ $company['contact']['phone'] }}</strong>
                @foreach ($company['contact']['emails'] as $email)
                    <span>{{ $email }}</span>
                @endforeach
            </div>
        </div>

        <form class="home-rfq-form" action="{{ route('inquiry.store') }}" method="post">
            @csrf
            <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off">
            <div>
                <label>Nama <input type="text" name="name" placeholder="Nama lengkap" required></label>
                <label>Perusahaan <input type="text" name="company" placeholder="Nama perusahaan" required></label>
            </div>
            <div>
                <label>Email <input type="email" name="email" placeholder="email@perusahaan.com" required></label>
                <label>Telepon <input type="text" name="phone" placeholder="+62..." required></label>
            </div>
            <div>
                <label>
                    Produk
                    <select name="product" required>
                        @foreach ($company['products'] as $product)
                            <option value="{{ $product['name'] }}">{{ $product['name'] }}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    Kebutuhan
                    <select name="requirement" required>
                        <option>Engineering / Technical Solution</option>
                        <option>Mechanical Equipment</option>
                        <option>Electrical Equipment</option>
                        <option>Instrumentation</option>
                        <option>Oil Spill Response</option>
                    </select>
                </label>
            </div>
            <label>Pesan <textarea name="message" rows="4" placeholder="Tuliskan spesifikasi, aplikasi, quantity, atau target penggunaan" required></textarea></label>
            <button class="btn btn-primary" type="submit">Kirim Permintaan RFQ Sekarang</button>
        </form>
    </section>
@endsection
