@extends('layouts.site')

@section('content')
    <section class="page-hero">
        <div>
            <span class="eyebrow">Request / Inquiry</span>
            <h1>Ajukan permintaan produk atau konsultasi teknis.</h1>
            <p>Isi data kebutuhan agar tim dapat memahami spesifikasi, aplikasi, dan produk yang diperlukan.</p>
        </div>
    </section>

    <section class="section contact-section">
        <div class="contact-copy">
            <span class="eyebrow">Lead Generation</span>
            <h2>Inquiry tervalidasi untuk kebutuhan calon pelanggan.</h2>
            <p>
                Form ini menyimpan permintaan ke storage lokal project. Integrasi email, WhatsApp,
                atau admin CMS dapat ditambahkan pada tahap berikutnya.
            </p>
            @if (session('status'))
                <div class="status-message">{{ session('status') }}</div>
            @endif
        </div>

        <form class="rfq-form" action="{{ route('inquiry.store') }}" method="post">
            @csrf
            <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off">
            <label>
                Nama
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap" required>
                @error('name') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <label>
                Perusahaan
                <input type="text" name="company" value="{{ old('company') }}" placeholder="Nama perusahaan" required>
                @error('company') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <label>
                Email
                <input type="email" name="email" value="{{ old('email') }}" placeholder="email@perusahaan.com" required>
                @error('email') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <label>
                Nomor Telepon
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+62..." required>
                @error('phone') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <label>
                Produk
                <select name="product" required>
                    @foreach ($products as $product)
                        <option value="{{ $product['name'] }}" @selected(old('product', $selectedProduct) === $product['name'])>{{ $product['name'] }}</option>
                    @endforeach
                </select>
                @error('product') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <label>
                Kebutuhan
                <select name="requirement" required>
                    <option @selected(old('requirement') === 'Engineering / Technical Solution')>Engineering / Technical Solution</option>
                    <option @selected(old('requirement') === 'Mechanical Equipment')>Mechanical Equipment</option>
                    <option @selected(old('requirement') === 'Electrical Equipment')>Electrical Equipment</option>
                    <option @selected(old('requirement') === 'Instrumentation')>Instrumentation</option>
                    <option @selected(old('requirement') === 'Oil Spill Response')>Oil Spill Response</option>
                </select>
                @error('requirement') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <label class="form-wide">
                Pesan
                <textarea name="message" rows="5" placeholder="Tuliskan spesifikasi, aplikasi, quantity, target penggunaan, atau pertanyaan teknis" required>{{ old('message') }}</textarea>
                @error('message') <span class="error-message">{{ $message }}</span> @enderror
            </label>
            <button class="btn btn-primary form-wide" type="submit">Kirim Inquiry</button>
        </form>
    </section>
@endsection
